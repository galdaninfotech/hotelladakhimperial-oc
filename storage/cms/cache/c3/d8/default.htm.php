<?php 
class Cms5fe0d12f83e40699679286_db1140e4d732c9a100d3159456b5d5d4Class extends \Cms\Classes\LayoutCode
{
public function onStart() {

    $config = App::make('config');

    $this['company'] = $config->get('site.company', 'Company Name');

    $this['slogan'] = $config->get('site.slogan', 'Company Slogan');

    $this['mobile1'] = $config->get('site.mobile1');

    $this['mobile2'] = $config->get('site.mobile2');

    $this['mobile3'] = $config->get('site.mobile3');

    $this['phone'] = $config->get('site.phone');

    $this['email1'] = $config->get('site.email1');

    $this['addressline1'] = $config->get('site.addressline1');

    $this['addressline2'] = $config->get('site.addressline2');

}

}
