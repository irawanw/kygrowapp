<?php 
namespace App\Services;
use GuzzleHttp\Client;

class ConvertKit implements MailingInterface
{
	private $key;
	private $email;
	private $url;
	
	function __construct($key, $email, $url)
	{
		$this->key = $key;
		$this->email = $email;
		$this->url = $url;
	}

	public function connection()
	{
		$client = new \GuzzleHttp\Client(['http_errors' => false]);
		$res = $client->request('POST', $this->url , [ 
				'auth' => ['apikey', $this->key ],
				// 'json' => [ 'email_address' => $this->email ]
			]);
        return json_decode($res->getBody());
	}

} ?>