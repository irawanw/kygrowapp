<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mailServices extends Model
{
    protected $fillable = ['mailing_id', 'url', 'key', 'user_id', 'goals','list'];
    public $timestamps = false;
}
