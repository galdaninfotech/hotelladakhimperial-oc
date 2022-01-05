<?php 
class Cms5fe0d1e99fbd1863442191_3743cf1c93acaff63c268c9a282c357fClass extends \Cms\Classes\PageCode
{
public function onStart(){
    $content = "User-agent: 
        Disallow: /cgi-bin/
        Disallow: /config/
        Disallow: /modules/
        Disallow: /plugins/
        Disallow: /storage/
        Disallow: /vendor/";
    return Response::make($content)->header('Content-Type', 'text/plain');
}
}
