<?php 
class Cms5a5c40aacc989189342686_fe1c56f512c64630531a5e334d087f01Class extends \Cms\Classes\PageCode
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
