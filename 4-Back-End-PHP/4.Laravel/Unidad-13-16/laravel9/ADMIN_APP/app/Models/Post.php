<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Events\SaveAuthorOnCreatePostEvent;
use App\Events\PostReadedEvent;
use Str;


class Post extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content'
    ];

    protected $hidden = [
        'user_id',
        'category_id'
    ];
    // Todos los eventos -> retrieved, creating, created, updating, updated, saving, saved, deleting, deleteed, restoring, resotred and replicating
    /*protected $dispatchesEvents = [
        // 'retrieved'=> PostReadedEvent::class,   
        'creating'=> SaveAuthorOnCreatePostEvent::class,   
        'created'=> PostReadedEvent::class,   
        /*'updating'=> PostReadedEvent::class,    
        'updated'=> PostReadedEvent::class,   
        'saving'=> PostReadedEvent::class, 
        'saved'=> PostReadedEvent::class, 
        'deleting'=> PostReadedEvent::class, 
        'deleted'=> PostReadedEvent::class, 
        'restoring'=> PostReadedEvent::class, 
        'restored'=> PostReadedEvent::class,
        'replicating'=> PostReadedEvent::class,*/
        // 'retrieved' => PostReadedEvent::class,
        // 'deleted' => UserDeleted::class,
    //];

    protected static function booted()
    {
        static::creating(function($post) {
            $post->slug = Str::slug($post->title);
            $post->user_id = 3;
        });
    }
   

    protected $appends = [
        'custom'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getCustomAttribute(){
        return $this->user_id . '-' . $this->category_id;
    }

    public function getSecondCustomAttribute(){
        return '2-2';
    }

    public function getThirdCustomAttribute(){
        return '3-3';
    }
}
