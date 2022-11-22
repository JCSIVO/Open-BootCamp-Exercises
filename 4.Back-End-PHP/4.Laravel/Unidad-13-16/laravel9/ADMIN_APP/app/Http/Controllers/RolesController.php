<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class RolesController extends Controller
{
    public function index(){
        $roles = [
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
        return view('panel.roles.index',[
            'roles' => $roles
        ]);
    }

    public function get(Request $request){
        $roles = [
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
        /*if ($request->isJson()){
            $input = $request->input();
            $body =  json_decode($request->getContent(), true);*/
            $body =  json_decode($request->getContent(), true);
            if(isset($body['type']) && $body['type'] == "Admin"){
                $roles = [
                    [
                        'id' => 2,
                        'label' => 'Admin',
                        'created_at' => '2022-11-14 16:53:00',
                        'updated_at' => '2022-11-14 16:53:00',
                    ]
                ];
            }

            // $response = [
               // 'input' => $input,
               //  'body' => $body,
            // ];
            return response()->json($roles);
        }
        // abort(400);
        
    //} 

    public function create(){
        return view('panel.roles.form', [
            'id' => null,
            'record' => null,
        ]);
    }
    public function edit($id){
        // Recuperar los roles
        $record = [
            'id' => 1,
            'label' => 'Normal',
            'created_at' => '2022-11-14 16:53:00',
            'updated_at' => '2022-11-14 16:53:00',
        ];
        return view('panel.roles.form', [
            'id' => $id,
            'record' => $record,
        ]);
    }
    public function save(Request $request, $id = null){

        if(($request->isMethod('POST') && $id != null) || ($request->isMethod('PUT') || $request->isMethod('PATCH')) && $id == null){
            abort(403);
        }
        if($request->isMethod('POST'))
            Session::flash('message','El perfil se ha creado correctamente');
        if($request->isMethod('PUT') || $request->isMethod('PATCH'))
            Session::flash('message','El perfil se ha actualizado correctamente');
        // $input = $request->input();
        return redirect()->route('roles.index');
        // print_r($input);
        // print_r($id);
    }
    public function delete($id){
        Session::flash('message','El perfil se ha eliminado correctamente');
        return redirect()->route('roles.index');
        // print_r($id);
    }
}
