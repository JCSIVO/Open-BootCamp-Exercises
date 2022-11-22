<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHistory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'element_id',
        'modified_by',
        'section',
        'action'
    ];
}
