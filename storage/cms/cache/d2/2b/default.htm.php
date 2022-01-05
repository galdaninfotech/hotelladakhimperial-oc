<?php 
class Cms5a76d52ea11ae461281796_6a297a8774a95b298b2176cd7702a77dClass extends \Cms\Classes\LayoutCode
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
