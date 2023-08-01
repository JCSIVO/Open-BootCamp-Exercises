<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hash;
use Session;


use App\Events\UserCreatedEvent;
use App\Events\UserUpdatedEvent;
use App\Events\UserDeletedEvent;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $table = 'other_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(UserRole::class);
        // return $this->belongsToMany(UserRole::class);
        // return $this->hasOne(UserRole::class);
        // return $this->hasMany(UserRole::class);
    }
    public function getFullnameAttribute(){
        return $this->name . ' ' . $this->lastname;
    }

    public function setPasswordAttribute($value){
        $this->attribute['password'] = Hash::make($value);
    }

    /*protected $dispatchesEvents = [  
        'created'=> UserCreatedEvent::class,      
        'updated'=> UserUpdatedEvent::class,   
        'deleted'=> UserDeletedEvent::class, 
    ];*/


    /**
     * The "booted" method of the model.
     * 
     * @return void
     */
    protected static function booted()
    {
        function createUserHistory($type, $user){
            $loggedUser = Session::get('user');
            $id = $loggedUser['id'];
            UserHistory::create([
                'element_id' => $user->id,
                'modified_by' => $id,
                'section' => 'users', 
                'action' => $type
            ]);
        }
        static::updated(function($user) {
            // \Log::debug($user);
            createUserHistory('update',$user);
        });
        static::created(function($user) {
            createUserHistory('create',$user);
        });
        static::deleted(function($user) {
            createUserHistory('delete',$user);
        });
    }






    /*public function get2FATokenAttribute(){
        return decrypt($this->faToken);
    }
    public function setFATokenAttribute($value){
        $this->attribute['fa_token'] = encrypt($value);
    }*/
}
