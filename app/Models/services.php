<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function wichRol(){
        return $this->hasOneThrough('App\roles', 'App\User');
    }
}
