<?php 
namespace App\Services;
use GuzzleHttp\Client;

class SendInBlue implements MailingInterface
{
	private $key;
	
	function __construct($key)
	{
		$this->key = $key;
	}

	public function connection()
	{
		$client = new \GuzzleHttp\Client(['http_errors' => false]);
		$res = $client->request('GET', "https://api.sendinblue.com/v3/account" ,[ 
			'headers' => [
	            'Accept' => 'application/json',
	            'Content-Type' => 'application/json',
	            'api-key' => $this->key
	        ],
		]);

        return json_decode($res->getBody());
	}

} ?>