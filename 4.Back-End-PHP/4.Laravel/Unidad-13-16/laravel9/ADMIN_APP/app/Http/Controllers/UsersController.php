<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::get();/*->toArray();[
            [
                'id' => 1,
                'name' => 'Jose',
                'email' => 'jose@example.com',
                'created_at' => '2022-11-14 16:53:00',
                'updated_at' => '2022-11-14 16:53:00',
            ],
            [
                'id' => 2,
                'name' => 'Isabel',
                'email' => 'isabel@example.com',
                'created_at' => '2022-11-14 16:53:00',
                'updated_at' => '2022-11-14 16:53:00',
            ],
            [
                'id' => 3,
                'name' => 'Belen',
                'email' => 'belen@example.com',
                'created_at' => '2022-11-14 16:53:00',
                'updated_at' => '2022-11-14 16:53:00',
            ]
        ];*/
        return view('panel.users.index',[
            'users' => $users
        ]);
    }
    public function create(){
        return view('panel.users.form', [
            'id' => null,
            'record' => null,
        ]);
    }
    public function edit($id){
        // Recuperar los tipos
        $record = [
            'id' => 1,
            'name' => 'Jose',
            'email' => 'jose@example.com',
            'created_at' => '2022-11-14 16:53:00',
            'updated_at' => '2022-11-14 16:53:00',
        ];
        return view('panel.users.form', [
            'id' => $id,
            'record' => $record,
        ]);
    }
    public function save(Request $request, $id = null){
        if(($request->isMethod('POST') && $id != null) || ($request->isMethod('PUT') || $request->isMethod('PATCH')) && $id == null){
            abort(403);
        }

        $input = $request->except('_token');



        if($request->isMethod('POST'))
            Session::flash('message','El usuario se ha creado correctamente');
        if($request->isMethod('PUT') || $request->isMethod('PATCH'))
            Session::flash('message','El usuario se ha actualizado correctamente');
        // $input = $request->input();

        if(!isset($input['password']))
            $input['password'] = 'dummy';


        User::updateOrCreate([
            'id' => $id
        ], $input);
        
        return redirect()->route('users.index');
        // print_r($input);
        // print_r($id);
        // $input = $request->input();
        // print_r($input);
        // print_r($id);
    }
    public function delete($id){
        Session::flash('message','El usuario se ha eliminado correctamente');
        $user = User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect()->route('users.index');
        // print_r($id);
    }
}
