<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailToken extends Model
{
    protected $fillable = [ 'access', 'refresh', 'mailing_id','user_id' ];

    public function mail_service()
    {
    	return $this->hasOne('App\mailServices','mailing_id', 'id');
    }

}
