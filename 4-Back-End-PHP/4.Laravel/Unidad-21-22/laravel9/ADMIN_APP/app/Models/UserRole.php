<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_role';

    public function user(){
        return $this->hasMany(User::class, 'role_id','id');
    }

    protected static function booted()
    {
        function createRoleHistory($type, $role){
            // $loggedUser = Session::get('user');
            // $id = $loggedUser['id'];
            UserHistory::create([
                'element_id' => $role->id,
                'modified_by' => Auth::id(),
                'section' => 'roles', 
                'action' => $type
            ]);
        }
        static::updated(function($role) {
            // \Log::debug($user);
            createRoleHistory('update',$role);
        });
        static::created(function($role) {
            createRoleHistory('create',$role);
        });
        static::deleted(function($role) {
            createRoleHistory('delete',$role);
        });
    }
}
