<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Hash;
use App\Models\User;
use App\Models\UserRole;
use App\Models\ModelTable;

class DatabaseController extends Controller
{
    public function index()
    {

        // $user = User::/*whereNotNull('email_verified_at')->orWhere('id', '>', 3)->*/with(['role'])->first();
        // print_r($users->role);

        // $user->password = "ASDF";
        // $user->save();

        // die();

        // echo $user->fullname;

        // $roles = UserRole::withCount(['user as administrators'])->having('administrators','>',5)->first();

        // $roles = User::join('user_role','users.role_id', '=', 'user_role.id')->get();

        // print_r($roles);

        // User::whereNotNull('id')->restore();
        // $users = User::withTrashed()->get();
        // $users = User::onlyTrashed()->forceDelete(); // lo borra sin vuelta atras

        // $users = User::all();
        // SELECT * FROM `users` WHERE `deleted_at` IS NULL 

        // $users = User::whereNotNull('email_verified_at')->orWhere('id', '>', 3)->get();
        /*User::select();
        SelectRaw();
        having
        havinRaw
        where
        whereRaw
        whereIn
        whereBetween
        orderBy
        limit
        skip

        withTashed
        restore
        forceDelete


        firstOrCreate
        updateOrCreate
        firstOrFail
        create


        join
        leftJoin
        rightJoin
        crossJoion


        getOriginal // == refresh

        clone
        fill

        with
        withCount
        withSum*/
        


        // print_r($users);






        // User::whereNotNull('id')->delete();

        //print_r(User::all());


        /**
         * DB::table('$tabla')
         */


        /**
         * Eloquent -> ORM -> Object Relationship Management
         * 
         * Objeto de manejo de relaciones
         */
    
        // El metodo restore() funciona con el withTrashed()
        
        /*$user = User::all();/*find(1);  // find, all, first,
        $user->fill([
            'name' => 'Kraig Orn MD',
            'email' => 'willi.abra@example.net'
        ]);
        // $user->name = "MD Orn Kraig";
        $user->refresh();

        $user->save();*/
        
        // $user = User::addSelect(' * from user_role where user.role_id = id')->where('id', 11)->firstOrFail();

        // $user = User::where('id',11)->firstOrFail();
        // print_r($user);


        // Insertart el name manualmente
        // $modelTable = ModelTable::find('18ad88dfdc07834a48e36e6c26be8843');

        // $modelTable->name = "First examples";

        // $modelTable->save();

        // update
        /*$result = ModelTable::updateOrCreate([
            'uid' => '18ad88dfdc07834a48e36e6c26be8843'
        ],
        [  
            'name' => 'Example of update or create'
        ]);
        $result ->delete();


        /*ModelTable::create([
            'name' => 'Example'
        ]);*/



        // $users = DB::table('users')->select('id','email')->where('id',1)->orWhere('id',2)->orderBy('name','desc')->get();
        // $users = DB::table('users')->get();
            // ->selectRaw('users.*, user_role.level as user_level')
            // ->where('users.id', 1)
            // ->having('user_level',1)
            // ->join('user_role', 'users.role_id','=','user_role.id')
            // ->leftJoin('user_role', 'users.role_id','=','user_role.id')
            // ->rightJoin('user_role', 'users.role_id','=','user_role.id')
            // ->crossJoin('user_role', 'users.role_id','=','user_role.id')
            // -> get();

            // ->whereRaw("id = 1 or id = 2")
            // ->whereNull('deleted_at')
            // SELECT * FROM USERS WHERE `id` = 1 or `id` = 2 and `deleted_at` is null

            /*->where('id',1)
            ->where('name','<>', null)
            ->where('name', 'like',"%A%")
            ->whereNotNull('name')
            ->whereBetween('email_verified_at',['2022-11-21 00:00:00', '2022-11-24 23:59:59'])
            ->whereIn('id',[2,3])*///->get();

            // DB::table('users')->selectRaw()->whereRaw()->havingRaw()->orderByRaw()

            //$users = DB::table('users')->select(DB::raw("name, email"))->get();

       // $users = DB::table('users')->whereNull('email_verified_at')->limit(1)->skip(2)->get();

        // todo lo de arriba es para obtener los datos sin modificarlos

        // $password = Hash::make('password');

        // modificar datos de la base de datos
        /*DB::table('users')->insert([
            'name' => 'Nombre',
            'email' => 'correo@example.net',
            'password' => 'ASDF'
        ]);*/
        // metodo update() decrement

        /*DB::table('users')/*->where('id',11)->updateOrInsert([
            'id' =>12,
        ],[
            'name' => 'JCSivo 4',
            'email' => 'Jcsivo2@example.net',
            'password' => $password 
            ]);*/

        //DB::table('users')->where('id', 12)->increment('role_id', 5);
        
        // print_r($users);      // print_r($users);($users->toArray()) // toJson //count()
        /*foreach($users as $u){
            print_r($u);
        }*/

        // Borrar la tabla 
        // DB::table('user_product_interest')->truncate();

        // DB::table('users')->whereIn('id',[11,12])->delete();
    }
    
}
