<?php

use Illuminate\Database\Seeder;

class mailing_list_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MailingLists::create([ 
        	'mail_name' => 'Mailchimp',
			'image' => 'mailchimp.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'ActiveCampaign',
			'image' => 'ActiveCampaign.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'ConvertKit',
			'image' => 'ConvertKit.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'Aweber',
			'image' => 'Aweber.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'Constant Contact',
			'image' => 'constant-contact.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'GetResponse',
			'image' => 'GetResponse.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'SendInBlue',
			'image' => 'SendInBlue.jpg' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'drip',
			'image' => 'drip.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'Campaign Monitor',
			'image' => 'campaign-monitor.png' 
		]);

		\App\MailingLists::create([ 
        	'mail_name' => 'Infusionsoft',
			'image' => 'Infusionsoft.png' 
		]);

		
    }
}
