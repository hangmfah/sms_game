<?php
// Get the PHP helper library from twilio.com/docs/php/install

require_once '/home/xxxx/public_html/phone/Twilio/autoload.php'; // Loads the library
use Twilio\Twiml;
use Twilio\Rest\Client;


// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "xxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$token = "Xxxxxxxxxxxxxxxxxx";
$client = new Client($sid, $token);




$response = new Twiml;
$body = $_REQUEST['Body'];


if( $body == 'guide' || $body == 'Guide' || $body == 'GUIDE' || $body == 'Guide'){
    $response->message('

｡◕‿◕｡

This is a nice tool
for interpenetrating
contemporary art.

Great for those with
little experience.

https://goo.gl/m3sRrf



');
}

else if( $body == 'Mikes'|| $body == 'mikes'|| $body == 'MIKES'|| $body == 'mike'|| $body == 'MIKE'|| $body == 'Mike'){
    $response->message('

◉_◉


');
}

else if( $body == 'More'|| $body == 'more'|| $body == 'MORE'){
    $response->message('

༼ ͡■ل͜ ͡■༽
One time I called Vito Acconci to ask him a question... Long story short, he answered. That and guy is fancy as hell! so

txt.
Email --- 4 my email
Txt   --- 2 txt me direct
Web   --- site link');
}



else if( $body == 'Email' ||$body ==  'email' ){
    $response->message('mike@mikeberadino.com');
}

else if( $body == 'TXT' ||$body ==  'Txt' ||$body ==  'txt'){
    $response->message('7132591999');
}

else if( $body == 'Web' ||$body ==  'web' ||$body ==  'WeB'){
    $response->message('http://mikeberadino.com');
}

else if( $body == 'face' ||$body ==  'Face' ){
    $response->message('(•◡•)');
}


else if( $body == 'dont know' ||$body ==  'idk' ||$body ==  'Idk' ){
    $response->message('\_(ʘ_ʘ)_/');
}



else if( $body == '?' ){
    $response->message('
::::::::::::::::::::::
::::::::::::::::::::::
::    ༼ つ ◕_◕ ༽    ::
::                  ::
::  FOR INFO ABOUT  ::
::    my art        ::
::                  ::
::  :txt:--mikes    ::
::::::::::::::::::::::
::::::::::::::::::::::
        .
.|_|_,.  |
 |       |
 |` `-._|
 | |
 | |      for a
 | | beginners guide
 | | to looking @ art
 | |
 | |  :txt:-- guide
 | |
 | |
 | |
 | |
 .--

');

}



print $response;
