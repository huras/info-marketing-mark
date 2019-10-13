<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Mail;


class TestsController extends Controller
{
    public function emailLayout(Request $request){

        $post = BlogPost::find(176);

        $nbsp = html_entity_decode("&nbsp;");
        $post['content'] = str_replace($nbsp, " ", html_entity_decode($post['content']) );

        return view('emails.newBlogPost',
            [
                'id' => $post['id'],
                'content' => $post['content'],
                'title' => $post['title'],
                'blogPostLink' => 'http://sogniamoingrande.it/post/'.$post['id'],
                'cover' => $post['cover'],
                'cover_type' => $post['cover_type_id']
            ]
        );
    }

    public function emailSend(Request $request){

        $post = BlogPost::find(176);

        $nbsp = html_entity_decode("&nbsp;");
        $post['content'] = str_replace($nbsp, " ", html_entity_decode($post['content']) );


        $target_email = 'hurast@gmail.com';
        Mail::send('emails.newBlogPost',
            [
                'id' => $post['id'],
                'content' => $post['content'],
                'title' => $post['title'],
                'blogPostLink' => 'http://sogniamoingrande.it/post/'.$post['id'],
                'cover' => $post['cover'],
                'cover_type' => $post['cover_type_id']
            ],
            function($message) use ($target_email, $post){
              $message->from('fromtest@yahoo.com', 'Sogniamo In Grande');
              $message->to($target_email, 'sogniamoningrande.it')
                      ->subject($post['title']);
            }
          );
    }
}
