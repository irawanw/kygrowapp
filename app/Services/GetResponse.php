<?php 
namespace App\Services;
use GuzzleHttp\Client;

class GetResponse implements MailingInterface
{
	private $key;
	
	function __construct($key)
	{
		$this->key = $key;
	}

	public function connection()
	{
		$client = new \GuzzleHttp\Client(['http_errors' => false]);
		$res = $client->request('GET', "https://api.getresponse.com/v3/accounts" ,[ 
			'headers' => [
	            'Accept' => 'application/json',
	            'Content-Type' => 'application/json',
	            'X-Auth-Token' => 'api-key '.$this->key
	        ],
		]);

        return json_decode($res->getBody());
	}

} ?>