<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'password'];
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'user_id');
    }
}