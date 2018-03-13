<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingLists extends Model
{
    public $timestamps = false;
    protected $fillable = [ 'url', 'mail_name', 'image' ];
    public function mail_service()
    {
    	return $this->hasOne('App\mailServices','mailing_id', 'id');
    }
}
