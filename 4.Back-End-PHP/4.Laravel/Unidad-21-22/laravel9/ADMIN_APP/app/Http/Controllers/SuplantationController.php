<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Session;

class SuplantationController extends Controller
{
    public function index($id/*Request $request*/)
    {
        if (!Session::has('id_original'))
            Session::put('id_original', Auth::id());
        // $idUser = $request->input('id');
        if ($id != null){
            $userToLoggin = User::find($id);
            if($userToLoggin != null){
                // Auth::attempt(['username' => '', 'password' => ''],true);
                Auth::login($userToLoggin); 
            }
        }
        // $message = "No estas logueado";
        /*if (Auth::check())
            $message = "Estás logueado" . $userToLoggin->name;*/
        return redirect()->back(); /*response($message);*/
    }
    public function returnToMyUser(){
        $myOriginalId = Session::get('id_original');
        $originalUser = User::find($myOriginalId);
        if($originalUser != null){
            Auth::login($originalUser);
        }
        Session::forget('id_original');
        return redirect()->back();
    }
}
