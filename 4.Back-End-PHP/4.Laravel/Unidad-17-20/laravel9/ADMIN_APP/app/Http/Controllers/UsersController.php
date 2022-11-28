<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Mail\GenericMail;
use Mail;
use App\Mail\ChangedPassword;

class UsersController extends Controller
{
    public function index(Request $request){    
        
        $filter = $request->only(['name', 'role_id']);
        
        // $name = $request->input('name');
        // $roleId = $request->input('role_id');
        // $name = 'M';
       
        $getParams = [];
        $where = [];


        // if($name != null)
        foreach($filter as $key => $value){
            $getParams[] = $key . '=' . $value;
            switch ($key) {
                case 'name':
                    $where[] = ['name', 'like', $value . '%'];
                    
                    break;
                case 'role_id';
                    $where[] = ['role_id', '=', $value];

                break;
            }
        }
        $users = User::where($where /*'name','like', $filter['name'] .'%'*/)->paginate(10);
        if(count($getParams) > 0){
            $getParamsString = implode('&', $getParams);
            $users->withPath('/users?' . $getParamsString);
        }


        /*$user = Auth::user();
        $user->lastname = "Consi";
        $user->save();*/


        /*$users = User::where('name','like', $name .'%')->paginate(10);/*get()*//*->toArray();[
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
            'users' => $users,
            //'name' => $name
        ]);
    }
    public function create(){
        $roles = UserRole::orderBy('label', 'asc')->get();
        $types = UserType:: orderBy('label', 'asc')->get();
        return view('panel.users.form', [
            'id' => null,
            'record' => null,
            'roles' =>$roles,
            'types' =>$types,
            'prefix' => 'users' 
        ]);
    }
    public function edit($id){
        $roles = UserRole::orderBy('label','asc')->get();
        $types = UserType:: orderBy('label', 'asc')->get();
        $record = User::find($id);
        // Recuperar los tipos
        /*$record = [
            'id' => 1,
            'name' => 'Jose',
            'email' => 'jose@example.com',
            'created_at' => '2022-11-14 16:53:00',
            'updated_at' => '2022-11-14 16:53:00',
        ];*/
        return view('panel.users.form', [
            'id' => $id,
            'record' => $record,
            'roles' =>$roles,
            'types' =>$types,
            'prefix' => 'users'
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

        /*if($id == null || ($id != null && isset($input['password']))){
            $password = isset($input['password'])?$input['password']:time();
            $input['password'] = Hash::make($password); 
            /*if(!isset($input['password']))
            $input['password'] = 'dummy';
        }*/

        if($id != null && isset($input['password'])){
            $actualPassword = $input['actual_password'];
            $user = User::find($id);
            if(Hash::check($actualPassword, $user->password))
                $newPassword = $input['password'];
                $user->update(['password' => $newPassword]);
                unset($input['password']);
                unset($input['actual_password']);
                // $user->password = $newPassword;
                // $user->save();
                // die();
                // Mail::to($user->email)->send(new ChangedPassword($user));
                $html = view('mails.changed-password',[
                    'user' => $user
                ]);
                echo $html;
                die();
        }/*else{
            die("No has introducido la contraseña correcta");
        }*/

        $savedUser = User::updateOrCreate([
            'id' => $id
        ], $input);
        
        $data = [
            'user' => $savedUser
        ];
        $subject = 'Bienvenido' . $savedUser->name;
        //try{
           // Mail::to($savedUser->email)->send(new GenericMail($data, $subject, 'welcome'));
        //}catch(\Exception $e){

        //}

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
