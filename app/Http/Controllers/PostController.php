<?php

namespace App\Http\Controllers;
// use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Api;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
   public function index(){
       $posts = Post::all();

       return view('post.index',compact('posts'));
   }

   public function publish(Post $post){
       $post->update(
           [ 
            'is_published' => true
           ]
       );
       $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

       $message = "OFERTA DE TRABAJO\n!Urgente $post->title!\n\nUbicación de la oferta - $post->location\n$post->description\n\nMás información en $post->url";
    
       $response = $telegram->sendMessage([
        'chat_id' => '@scraping_web_pruebas', 
        'text' => $message
      ]);
   
     
       

       return back();
}

    public function sendMessage($notifiable){
    TelegramFile::create()
        ->to($notifiable->telegram_user_id) // Optional
        ->content('Did you know we can set a custom filename too?')
        ->document('https://file-examples-com.github.io/uploads/2017/10/file-sample_150kB.pdf', 'sample.pdf');
    }
}