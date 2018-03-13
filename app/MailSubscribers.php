<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailSubscribers extends Model
{
    protected $fillable = ['email', 'name', 'date', 'state', 'user_id'];
    public $timestamps = false;

}
