<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MailConfigController extends Controller
{
    public static function index()
    {
        $config = array(

            'driver' => "smtp",
            'host' => "smtp.gmail.com",
            'port' => "587",
            'encryption' => "tls",
            'username' => "nangaonkham@gmail.com",
            'password' => "na234",
            'to' => array('address' => "nangaonkham@gmail.com", 'name' => "Naing Group"),
            'sendmail' => '/usr/sbin/sendmail -bs',
            'pretend' => false
        );
        Config::set('mail',$config);

        // https://www.google.com/settings/security/lesssecureapps
        // https://accounts.google.com/b/0/DisplayUnlockCaptcha
    }
}
