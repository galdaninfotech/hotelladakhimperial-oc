<?php 
class Cms5a1390c28850c158244128_6851e3fc698984d5c2f8ce6e12b5184eClass extends \Cms\Classes\LayoutCode
{
public function onStart() {
    $config = App::make('config');
    $this['company'] = $config->get('site.company', 'Company Name');
    $this['slogan'] = $config->get('site.slogan', 'Company Slogan');
    $this['mobile1'] = $config->get('site.mobile1');
    $this['mobile2'] = $config->get('site.mobile2');
    $this['phone'] = $config->get('site.phone');
    $this['email1'] = $config->get('site.email1');
    $this['addressline1'] = $config->get('site.addressline1');
    $this['addressline2'] = $config->get('site.addressline2');
}
}
