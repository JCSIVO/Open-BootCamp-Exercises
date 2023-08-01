<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    protected $table = 'type';

    public function user(){
        return $this->hasMany(User::class, 'type','id');
    }

    protected static function booted()
    {
        function createTypeHistory($type){
            // $loggedUser = Session::get('user');
            // $id = $loggedUser['id'];
            UserHistory::create([
                'element_id' => $type->id,
                'modified_by' => Auth::id(),
                'section' => 'roles', 
                'action' => $type
            ]);
        }
        static::updated(function($type) {
            // \Log::debug($user);
            createRoleHistory('update',$type);
        });
        static::created(function($type) {
            createRoleHistory('create',$type);
        });
        static::deleted(function($type) {
            createRoleHistory('delete',$type);
        });
    }
}
