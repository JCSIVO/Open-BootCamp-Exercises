<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class LoginController extends Controller
{
    public function form(){
        return view('login');
    }
    public function login(Request $request){

        $input = $request->only('email', 'password');
        $access = $this->_checkCredentials($input);
        if(!$access){
            Session::flash('error','Credenciales inválidas');
            return redirect()->back();
        }
        $user = User::where('email', $input['email'])->first();
        Session::put('user', [
            'id' => $user->id,
            'email' =>$user->email
        ]);
        return redirect()->route('home');
    }
    public function logout(){
        Session::forget('user');
        return redirect()->route('home');
    }
    private function _checkCredentials($input){
        /*$credentials = [
            'email' => "root",
            'password' => "root",
        ];*/
        if(!isset($input['email']) || !isset($input['password']))
            return false;
        $access = $this->_checkUserAndPassword($input['email'], $input['password']);
        // $access = $credentials['email'] == $input['email'] && $credentials['password'] == $input['password'];
        return $access;
    }




    private function _checkUserAndPassword($user, $password){
        $user = User::where('email',$user)->first();
        return \Hash::check($password, $user->password);
    }

}
