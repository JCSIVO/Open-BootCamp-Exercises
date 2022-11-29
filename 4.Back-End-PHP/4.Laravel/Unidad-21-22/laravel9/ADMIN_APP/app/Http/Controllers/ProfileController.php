<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserRole;
use App\Models\UserType;

class ProfileController extends Controller
{
    public function home(){
        $record = Auth::user();
        $roles = UserRole::orderBy('label','asc')->get();
        $types = UserType:: orderBy('label', 'asc')->get();
        // $record = User::find($id);
        return view('panel.users.form', [
            'id' => $record->id,
            'record' => $record,
            'roles' =>$roles,
            'types' =>$types,
            'prefix' => 'profile'
        ]);
    }
    public function save(Request $request){
        $input = $request->except('_token');
        $user = Auth::user();
        // request()->user();

        if(isset($input['password'])){
            $actualPassword = $input['actual_password'];
            if(!Hash::check($actualPassword, $user->password)){
                unset($input['password']);
            }
        }
        $user->update($input); //  $user->fill($input);
        // $user->save();
        return redirect()->back();
    }
    /*public function logout(){
        Auth::logout();
    }*/
}
