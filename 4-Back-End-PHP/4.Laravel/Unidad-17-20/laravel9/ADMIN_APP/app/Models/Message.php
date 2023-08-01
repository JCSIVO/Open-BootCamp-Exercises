<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Message extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['author_id'];
}
