<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class WebsiteController extends Controller
{

    public function section($section) {
        $user = Session::get('name', 'Usuario');
        $data = [
            'user' => $user,
            'section' => $section,
        ];

        switch ($section) {
            case 'home':
                $data['user'] = $user;
                $data['date'] = date('d/m/Y');
                $data['time'] = date('H:i');
                break;
            case 'who-we-are':
                $data['name'] = "Jose";
                $data['profession'] = "FullStack";
                $data['ages'] = 43;
                break;
        }
        return view('website.'.$section, $data);
    }

    /*public function home (){
        $date = date('d/m/Y');
        $time = date('H:i');

        $user = Session::get('name', 'Usuario');

        // print_r($user);
        return view('website.home', [
            'date' => $date,
            'time' => $time,
            'user' => $user
        ]);
    }*/
    public function personalize(Request $request){
        $name = $request->input('name');
        Session::put('name', $name);
        return redirect()->back();
    }
    /*public function who(){
        $user = Session::get('name', 'Usuario');
        $name = 'Jose';
        $profession = "FullStack";
        $ages = 43;
        $section = 'who';
        return view('website.who-we-are',[
            'name' => $name,
            'profession' => $profession,
            'ages' => $ages ,
            'section' => $section,
            'user' => $user,
        ]);
    }*/
    /*public function contact(){
        return view('website.contact');
    }*/
    public function sendContact(Request $request){
        $input = $request->only('name','email','message');
        if(!isset($input['name']) ||!isset($input['email']) ||!isset($input['message']) );
            return view('website.contact-results.contact-error');
        return view('website.contact-results.contact-success');
        
    }
}
