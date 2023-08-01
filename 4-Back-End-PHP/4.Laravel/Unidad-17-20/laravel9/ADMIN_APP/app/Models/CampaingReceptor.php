<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaingReceptor extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaing_id',
        'user_id',
        'sent',
        'error'
    ];

    public function campaing(){
        return $this->belongsTo(Campaing::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
