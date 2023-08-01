<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\GenericMail;
use Auth;
use App\Notifications\GenericNotification;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class SendingEmailsController extends Controller
{
    /*private $_model;

    public function __construct(User $user){
        if (!Gate::allows('sending-emails')) {
            abort(403);
        }
    }*/





    public function index(Request $request){

        $name = 'Jcsivo';
        $data = [
            'name' => 'JCSIVO',
        ];
        $template = 'myfirstmail';


        Mail::to('example@example.net', 'John Doe')->send(new GenericMail($data,'Test Email', $template));

       
        Notification::route('mail', 'example@example.net')->notify(new GenericNotification($name));

        /*if (!Gate::allows('sending-emails')) {
            abort(403);
        }*/

        // Mail::to('example@example.net', 'John Doe')->bcc(env('MAIL_ADMIN_RECEPTOR'))->queue(new GenericMail());
        // Mail::to('email', 'nombre')->cc(['email1', 'nombre1'])->bcc(['email1, nombre1'])->send(new class());
        // Mail::to('email', 'nombre')->queue/*otro later(now()->addMinutes(5), new class());*/();

        /* $user = Auth::user();
         $name = "JCSIVO";

        $user->notify(new GenericNotification($name))->delay([
            'slack' => now()->addMinutes(10),
            'sms' => now()->addMinutes(1),
        ]);

         // $user = Auth::user();
        Notification::send($user, new GenericNotification($name))/*->delay();

        Notification::route('mail', 'example@example.net')->notify(new GenericNotification($name));*/
        
    }
}
