<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class TypesController extends Controller
{
    public function index(){
        $types = [
            [
                'id' => 1,
                'label' => 'Normal',
                'created_at' => '2022-11-14 16:53:00',
                'updated_at' => '2022-11-14 16:53:00',
            ],
            [
                'id' => 2,
                'label' => 'Admin',
                'created_at' => '2022-11-14 16:53:00',
                'updated_at' => '2022-11-14 16:53:00',
            ],
            [
                'id' => 3,
                'label' => 'Super Admin',
                'created_at' => '2022-11-14 16:53:00',
                'updated_at' => '2022-11-14 16:53:00',
            ]
        ];
        return view('panel.types.index',[
            'types' => $types
        ]);
    }
    public function create(){
        return view('panel.types.form', [
            'id' => null,
            'record' => null,
        ]);
    }
    public function edit($id){
        // Recuperar los tipos
        $record = [
            'id' => 1,
            'label' => 'Normal',
            'created_at' => '2022-11-14 16:53:00',
            'updated_at' => '2022-11-14 16:53:00',
        ];
        return view('panel.types.form', [
            'id' => $id,
            'record' => $record,
        ]);
    }
    public function save(Request $request, $id = null){
        if(($request->isMethod('POST') && $id != null) || ($request->isMethod('PUT') || $request->isMethod('PATCH')) && $id == null){
            abort(403);
        }
        if($request->isMethod('POST'))
            Session::flash('message','El tipo se ha creado correctamente');
        if($request->isMethod('PUT') || $request->isMethod('PATCH'))
            Session::flash('message','El tipo se ha actualizado correctamente');
        // $input = $request->input();
        return redirect()->route('types.index');
        // print_r($input);
        // print_r($id);
        // $input = $request->input();
        // print_r($input);
        // print_r($id);
    }
    public function delete($id){
        Session::flash('message','El tipo se ha eliminado correctamente');
        return redirect()->route('types.index');
        // print_r($id);
    }
}
