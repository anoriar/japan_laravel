<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable = ['username', 'email', 'theme', 'message'];
    public $timestamps = false;
}
