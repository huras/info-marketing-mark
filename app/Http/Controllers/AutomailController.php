<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Automail;
use App\Models\NewsletterContact;

class AutomailController extends Controller
{
    function listAutomail(){
        $automails = Automail::all();
        return view('criador/automail/list',compact('automails'));
    }

    function createAutomail(Request $request){
        $data = $request->all();

        if($data['target_type'] == 'hand-picked'){
            $targetIDs = '';
            foreach($data['selected_targets'] as $targetID){
                $targetIDs = $targetIDs.$targetID.';';
            }
            $data['target_mail'] = $targetIDs;
        }

        $automail = Automail::create($data);

        session()->flash('window_msg', 'Automail created with success!');
        session()->flash('msg_context', 'success');
        return redirect()->action('AutomailController@listAutomail');
    }

    function newAutomail(){
        $targets = [
            ['value' => 'all', 'label' => 'All contacts'],
            ['value' => 'has-name', 'label' => 'Only contacts with first and last names'],
            ['value' => 'has-first_name', 'label' => 'Only contacts with at least the first name'],
            ['value' => 'single-email', 'label' => 'Single Email (You write the email. The message will be sent to only 1 e-mail.)'],
            ['value' => 'hand-picked', 'label' => 'Select the contacts I want from a list'],
        ];

        $timeCondition = [
            ['value' => 'Daily', 'label' => 'Daily'],
            ['value' => 'Weekly', 'label' => 'Weekly'],
            ['value' => 'Monthly', 'label' => 'Monthly'],
            ['value' => 'Annualy', 'label' => 'Annualy'],
            ['value' => 'Once', 'label' => 'Only once'],
        ];

        $daysOfWeek = [
            ['value' => 0, 'label' => 'Sunday'],
            ['value' => 1, 'label' => 'Monday'],
            ['value' => 2, 'label' => 'Tuesday'],
            ['value' => 3, 'label' => 'Wednesday'],
            ['value' => 4, 'label' => 'Thursday'],
            ['value' => 5, 'label' => 'Friday'],
            ['value' => 6, 'label' => 'Saturday'],
        ];

        $templates = [
            ['value' => 'template_1', 'label' => 'Template 1', 'thumb' => '/img/site/email_template_1.png'],
        ];

        $contacts = NewsletterContact::where('receive_emails', 1)->get();

        return view('criador/automail/new',compact('targets', 'timeCondition', 'daysOfWeek', 'templates', 'contacts'));
    }

    public function destroy (Request $request, $id) {        
        $item = Automail::find($id);
        $item->delete();

        session()->flash('window_msg', 'Automail deleted with success!');
        session()->flash('msg_context', 'success');
        return redirect()->action('AutomailController@listAutomail');
    }

    public function activate($id){
        $automail = Automail::find($id);
        if($automail){
            $automail->active = 1;
            $automail->save();
        }

        return redirect()->action('AutomailController@listAutomail');
    }

    public function deactivate($id){
        $automail = Automail::find($id);
        if($automail){
            $automail->active = 0;
            $automail->save();
        }

        return redirect()->action('AutomailController@listAutomail');
    }

    function autosend(){
        //The current date must be aquired before the loops because it will take sometime to send each email
        $mdebug = true;
        $now = date("Y-m-d H:i:s");
        $today = date("Y-m-d");

        if($mdebug)
            echo 'Current time = '.$now.' <br>';

        //Retrieve the scheduled emails to be shot
        $scheduled_emails = Automail::where('active', 1)->get();
        if($mdebug)
            echo 'found '.count($scheduled_emails).' active automails <br>';

        //Para cada email
        foreach($scheduled_emails as $key => $scheduled_email){
            if($mdebug)
                echo '<br>testing automail with index = '.$key.'<br>';
            //Testa se ele deve ou não ser disparado nessa iteração do cron
            //Check time conditions
            $time_conditions_result = false;
            
            $time_condition_type = $scheduled_email['time_condition_type'];
            if($mdebug)
                echo 'time condition type = '.($time_condition_type).'<br>';
            switch($time_condition_type){
                case 'Daily':
                        //Time difference in minutes
                        $current_time = strtotime($now);
                        $shot_time = strtotime($today." ".$scheduled_email['shot_time']);
                        $time_difference = round(($shot_time - $current_time) / 60,0);
                        
                        //Negative difference means the email shot time is in the past
                        //Positive difference means the email shot time is in the future
                        if($time_difference == 0){
                            $time_conditions_result = true;
                        } else {
                            if($mdebug)
                                echo 'time difference = '.($time_difference).'<br>';
                        }
                    break;
                case 'Weekly':
                    //Sunday = 0  //Monday = 1  //Tuesday = 2  //Wednesday = 3  //Thursday = 4  //Friday = 5  //Saturday = 6
                    $nowWeekDay = date('w', strtotime($now));
                    $shotWeekDay = $scheduled_email['day_of_week'];

                    //Time difference in minutes
                    $current_time = strtotime($now);
                    $shot_time = strtotime($today." ".$scheduled_email['shot_time']);
                    $time_difference = round(($shot_time - $current_time) / 60,0);

                    if($nowWeekDay == $shotWeekDay && $time_difference == 0){
                        $time_conditions_result = true;
                    }
                break;
                case 'Monthly':
                    //Check the number of the day
                    $nowDay = date('d', strtotime($now));
                    $shotDay = $scheduled_email['day_of_month'];

                    //Time difference in minutes
                    $current_time = strtotime($now);
                    $shot_time = strtotime($today." ".$scheduled_email['shot_time']);
                    $time_difference = round(($shot_time - $current_time) / 60,0);

                    if($nowDay == $shotDay && $time_difference == 0){
                        $time_conditions_result = true;
                    }
                break;
                case 'Annualy':
                    //Check the number of the day
                    $currentYear = date('Y',strtotime($today));
                    $todayDate = strtotime($currentYear.'-'.date('m-d',strtotime($today)));
                    $shotDay = strtotime($currentYear.'-'.date('m-d', strtotime($scheduled_email['special_day'])));

                    //Time difference in minutes
                    $current_time = strtotime($now);
                    $shot_time = strtotime($today." ".$scheduled_email['shot_time']);
                    $time_difference = round(($shot_time - $current_time) / 60,0);

                    if($time_difference == 0){
                        if($todayDate == $shotDay)
                            $time_conditions_result = true;
                        else{
                            if($mdebug)
                                echo 'dates : Today Date = '.$todayDate.' <br>Shot Day '.$shotDay.'<br>';    
                        }
                    }else {
                        if($mdebug)
                            echo 'time difference = '.($time_difference).'<br>';
                    }
                break;
                case 'Once':
                    //Check the number of the day
                    $todayDate = strtotime($today);
                    $shotDay = strtotime(date('Y-m-d', strtotime($scheduled_email['special_day'])));

                    //Time difference in minutes
                    $current_time = strtotime($now);
                    $shot_time = strtotime($today." ".$scheduled_email['shot_time']);
                    $time_difference = round(($shot_time - $current_time) / 60,0);

                    if($todayDate == $shotDay && $time_difference == 0){
                        $time_conditions_result = true;

                        //Marca o automail como disparado, assim ele não sera mais disparado
                        $scheduled_email->active = -1;
                        $scheduled_email->save();
                    }
                break;
            }            
            
            //If time conditions are not met, the algorithm will not send the email
            if(!$time_conditions_result){
                if($mdebug)
                    echo 'time conditions were not met<br>';
                continue;
            }
            if($mdebug)
                echo 'time conditions were met<br>';

            //Obtem os alvos do disparo
            $target_type = $scheduled_email['target_type'];
            $email_targets = [];
            if($target_type == 'all') {
                $email_targets = NewsletterContact::where('receive_emails', 1)->get();
            } else if($target_type == 'has-fist_name') {
                $email_targets = NewsletterContact::where('receive_emails', 1)->where('first_name', '<>', '')->get();
            } else if($target_type == 'has-name') {
                $email_targets = NewsletterContact::where('receive_emails', 1)->where('first_name', '<>', '')->where('last_name', '<>', '')->get();
            } else if ($target_type == 'single-email') {
                $email_targets = [
                        [
                            'email' => $scheduled_email['target_mail'],
                            'first_name' => $scheduled_email['first_name'],
                            'last_name' => $scheduled_email['last_name'],
                        ]
                    ];
            } else if ($target_type == 'hand-picked'){
                $target_ids = explode(';', $scheduled_email['target_mail']);                
                $query = NewsletterContact::where('receive_emails', 1);
                foreach($target_ids as $target_id){
                    $query->orWhere('id', $target_id);
                }
                $email_targets = $query->get();
            }

            if($mdebug)
                echo 'Found '.count($email_targets).' email targets<br>';

            //Get the scheduled email template
            $template_name = $scheduled_email['template_name'];
            $scheduled_content = $scheduled_email['content'];
            $scheduled_topic = $scheduled_email['topic'];
            $scheduled_from = $scheduled_email['from'];            
            
            //Para cada destinatário
            foreach($email_targets as $target) {
                if($mdebug)
                    echo 'attempting to send to '.$target['email'].'<br>';

                //Get target info
                $name = $target['first_name'].' '.$target['last_name'];
                $first_name = $target['first_name'];
                $last_name = $target['last_name'];
                $target_email = $target['email'];

                //Personalise the message
                $content_copy = $scheduled_content;
                $content_copy = str_replace('[name]', $name, $content_copy);
                $content_copy = str_replace('[firstname]', $first_name, $content_copy);
                $content_copy = str_replace('[lastname]', $last_name, $content_copy);

                //Send the email
                Mail::send('emails.'.$template_name, ['content' => $content_copy],
                        function($message) use ($target_email, $scheduled_topic, $scheduled_from){
                            $message->from('sogniamoingrande@yahoo.com', $scheduled_from);
                            $message->to($target_email, 'sogniamoningrande.it')->subject($scheduled_topic);
                        }
                );
            }
        }
    }
}
