<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaing extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function receptors(){
        return $this->hasMany(CampaingReceptor::class);
    }
}
