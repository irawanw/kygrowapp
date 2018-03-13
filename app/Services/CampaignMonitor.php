<?php 
namespace App\Services;
use GuzzleHttp\Client;

class CampaignMonitor implements MailingInterface
{
	private $key;
    private $list_id;
	
	function __construct($key,$list_id)
	{
		$this->key = (string) $key;
        $this->list_id = $list_id;
	}

	public function connection()
	{
        //create GuzzleHttp client
		$client = new \GuzzleHttp\Client(['http_errors' => true]);
        
        
        //get the active subscribers
        $url_list = 'https://api.createsend.com/api/v3.1/lists/'.$this->list_id.'/active.json';
        $res_list = $client->request('GET', $url_list ,[ 
            'auth' => [$this->key, ':nopass'],
            'headers' => ['Content-Type' => 'application/json; charset=utf-8']
        ]);

        return json_decode($res_list->getBody()->getContents(), true);
    }
    

} ?>