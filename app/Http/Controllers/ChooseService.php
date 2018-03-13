<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Mailchimp;
use App\Services\CampaignMonitor;
use Auth;
use GuzzleHttp\Client; 
use App\MailSubscribers;

class ChooseService extends Controller
{
    public function index()
    {
        $mails = \App\MailingLists::get();
        return view('email_services.choose', compact('mails'));
    }
    public function service($id)
    {
        $mail = \App\MailingLists::find($id);
        return view('email_services.mail', compact('mail'));
    	
    }
    public function check(Request $request)
    {
    	if ( $request->mailing_id == 1) {
    		$key = $request->get('key');
	    	$arrkey = explode("-", $key);
	    	$url = 'https://us14.api.mailchimp.com/3.0';
	    	if ( count($arrkey) > 1 ) {
		    	$url = 'https://'.$arrkey[ 1 ].'.api.mailchimp.com/3.0';
	    	}
	    	// $email =  $request->get('key');
	    	$mail = new \App\Services\Mailchimp($key, "", $url);
	    	return response()->json( $mail->connection() );
    	} 
        if ( $request->mailing_id == 2 ) {
            $key = $request->get('key');
            $url = $request->get('url');
            $mail = new \App\Services\ActiveCampaign($key, $url);
            return response()->json( $mail->connection() );
        }
        if ( $request->mailing_id == 6 ) {
            $key = $request->get('key');
            $mail = new \App\Services\GetResponse($key);
            return response()->json( $mail->connection() );
        }
        if ( $request->mailing_id == 7 ) {
    		$key = $request->get('key');
	    	$mail = new \App\Services\SendInBlue($key);
	    	return response()->json( $mail->connection() );
        }
        if ( $request->mailing_id == 9 ) {
    		$key = $request->get('key');
    		$list = $request->get('list');
            $mail = new CampaignMonitor($key,$list);
            $datas = array_get($mail->connection(), 'Results', []);
            foreach($datas as $data){
                $mail_subscribers = new MailSubscribers;
                $mail_subscribers->email = array_get($data, 'EmailAddress', null);
                $mail_subscribers->name = array_get($data, 'Name', null);
                $mail_subscribers->date = array_get($data, 'Date', null);
                $mail_subscribers->state = array_get($data, 'State', null);
                $mail_subscribers->user_id = Auth::user()->id;
                $mail_subscribers->save();
            }
	    	return response()->json( $mail->connection() );
    	}
    	
    }
    public function save(Request $request)
    {
        $data = $request->only(['key', 'url', 'mailing_id', 'list']);
        $data['user_id'] = Auth::user()->id;
        \App\mailServices::create($data);
        $request->session()->put('mailing_id', $data['mailing_id']);
        return response()->json(['msg' => 'success' ]);
    }
    public function list_goal(Request $request)
    {
        return view('email_services.list_goal');
    }
    public function finish(Request $request)
    {
        $goals = $request->get('goals');
        $mail = \App\mailServices::whereUserId( Auth::user()->id )
            ->whereMailingId( $request->session()->get('mailing_id') )
            ->update(['goals' => $goals]);
        $request->session()->forget('mailing_id');
        return view('email_services.finish');
    }

    public function integrate(Request $request)
    {
        //get param query string
        $param_url = $request->query();
        //campaignmonitor param code and user id
        $campaign_monitor = new CampaignMonitor($param_url['code'],Auth::user()->id);
        return response()->json( $campaign_monitor->connection() );
        
    }
    

    public function token_test(Request $request)
    {
        
        //get param query string
        $param_url = $request->query();
        //campaignmonitor
        $url = 'https://api.createsend.com/oauth/token';
        //create guzzle client
        $client = new \GuzzleHttp\Client(['http_errors' => true]);
        //make post request and save to variable
        $res = $client->request('POST', $url , [ 
                    //make Content-Type application/x-www-form-urlencoded
                    'form_params' => [
                        //fields
                        'grant_type' => 'authorization_code',
                        'client_id' => '112305',
                        'client_secret' => '5w0j0DH0090gO30WhW0UH8Z000s0e0e0B0dO9BybtyC00iP0h00ObiuM0Rj0000ACiPLAxfKcTt2G87R',
                        'code' => $param_url['code'],
                        'redirect_uri' => 'http://iwikodevsite-in.cloud.revoluz.io:49405/integrate',
                    ]
                ]);
        //$body = (string) $res->getBody();
        $body = json_decode($res->getBody()->getContents(), true);
        $access_token = array_get($body, 'access_token');
        $refresh_token = array_get($body, 'refresh_token');
        $data = array(
            'access_token' => $access_token,
            'refresh_token' => $refresh_token,
        );
        //data access_token and refresh_token on body can be save to DB
        //after this, get the subscribers
        return response()->json( $data ); 
        
    }
}
