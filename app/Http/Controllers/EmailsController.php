<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterContact;
use App\Models\Automail;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    function dashboard(){
        return view('criador/email/dashboard');
    }

    function newGroupMail(){
        return view('criador/email/newGroupMail');
    }

    function testMailLayout(){
        return view('emails/hello');
    }

    function sendEmailToList(Request $request){
        $request_all = $request->all();
        $target_type = '';
        $email_layout = '';

        if(isset($request_all['target_type']) && isset($request_all['email_layout'])){
            $target_type = $request_all['target_type'];
            $email_layout = $request_all['email_layout'];

            $target_list = [];
            if($target_type == 'all') {
                $target_list = NewsletterContact::all();
            } else if($target_type == 'has-fist_name') {
                $target_list = NewsletterContact::where('first_name', '<>', '')->get();
            } else if($target_type == 'has-name') {
                $target_list = NewsletterContact::where('first_name', '<>', '')->where('last_name', '<>', '')->get();
            } else if ($target_type == 'single-email') {
                $target_list = [
                        [
                            'email' => $request_all['target_mail'],
                            'first_name' => $request_all['first_name'],
                            'last_name' => $request_all['last_name'],
                        ]
                    ];
            }
            
            foreach($target_list as $target) {
                $name = $target['first_name'].' '.$target['last_name'];
                $first_name = $target['first_name'];
                $last_name = $target['last_name'];
                $targets_email = $target['email'];
                $content = $request_all['email_content'];
                
                $content = str_replace('[name]', $name, $content);
                $content = str_replace('[firstname]', $first_name, $content);
                $content = str_replace('[lastname]', $last_name, $content);

                Mail::send($email_layout,
                        ['name' => $name, 'first_name' => $first_name, 'last_name' => $last_name, 'content' => $content], 
                        function($message) use ($targets_email, $request_all){
                            $message->from('fromtest@yahoo.com', $request_all['name_in_the_from']);
                            $message->to($targets_email, 'sogniamoningrande.it')->subject($request_all['email_topic']);
                        }
                );
            }

            session()->flash('window_msg', 'Emails sent with success!');
            session()->flash('msg_context', 'success');
        }
        else{
            session()->flash('window_msg', 'Emails sending failed!');
            session()->flash('msg_context', 'error');
        }

        return redirect()->route('mail.dashboard');
    }
}
