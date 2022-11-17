<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class UsersController extends Controller
{
    public function index(){
        $users = [
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
        ];
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
        if($request->isMethod('POST'))
            Session::flash('message','El usuario se ha creado correctamente');
        if($request->isMethod('PUT') || $request->isMethod('PATCH'))
            Session::flash('message','El usuario se ha actualizado correctamente');
        // $input = $request->input();
        return redirect()->route('users.index');
        // print_r($input);
        // print_r($id);
        // $input = $request->input();
        // print_r($input);
        // print_r($id);
    }
    public function delete($id){
        Session::flash('message','El usuario se ha eliminado correctamente');
        return redirect()->route('users.index');
        // print_r($id);
    }
}
