<?php

namespace App\Util\Mails;

use Config;

class MailConfig
{
    public static function init()
	{
		$config = array(
            
                'driver' => "smtp",
                'host' => "smtp.gmail.com",
                'port' => "587",
                'encryption' => "tls",
                'username' => "catfighter.mth@gmail.com",
                'password' => "ilovemyothiha1995",
                'from' => array('address' => "sanlynn80@gmail.com", 'name' => "Myanmar Book Foundation"),
                'sendmail' => '/usr/sbin/sendmail -bs',
                'pretend' => false
        );
		Config::set('mail',$config);
	}

}