<?php 
namespace App\Services;
use GuzzleHttp\Client;

class ActiveCampaign implements MailingInterface
{
	private $key;
	private $url;
	
	function __construct($key, $url)
	{
		$this->key = $key;
		$this->url = $url;
	}

	public function connection()
	{
		$query = '';
		$params = [ 
			'api_key' => $this->key,
			'api_action'   => 'account_view',
			'api_output'   => 'json',
		];
		foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
		$query = rtrim($query, '& ');
		$url = rtrim($this->url, '/ ');
		$api = $url . '/admin/api.php?' . $query;

		$client = new \GuzzleHttp\Client(['http_errors' => false]);
		$res = $client->request('GET', $api );
        return json_decode($res->getBody());
	}

} ?>