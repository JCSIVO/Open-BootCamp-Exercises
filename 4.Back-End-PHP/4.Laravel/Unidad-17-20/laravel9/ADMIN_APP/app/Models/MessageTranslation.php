<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['author_id'];
}
