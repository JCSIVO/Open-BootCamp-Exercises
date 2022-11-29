<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App;
use Lang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function locale(Request $request){

        App::setLocale('es');
        // print_r(Message::all()->toArray());
        // die();

        /*$message = Message::find(1);
        $message->title = 'Hello world';
        $message->content = 'Message translated';
        $message->save();*/


        $data = [
            'author_id' => 1,
            'en' => [
                'title' => 'Hello World',
                'content' => 'Message translated'
            ],
            'es' =>[
                'title' => 'Hola mundo',
                'content' => 'Mensaje traducido'
            ],
            'de' =>[
                'title' => 'Hi World',
                'content' => 'Message translated'
            ],
        ];
        Message::create($data);





        // App::setLocale('en');

        /*$cadena = "messages.hola mundo";
        $translated = Lang::get($cadena);
        echo $translated;
        die();*/
        die();
        $name = $request->input('name')??'JCSIVO';
        $years = $request->input('years')??30;

        /*$language = 'en';
        echo App::getLocale();
        echo "\n";
        echo Lang::get('messages.mi nombre es', ['name' => $name, 'years' => $years], $language);

        die();*/


        return view('locale', [
            'name' => $name,
            'years' => $years
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
