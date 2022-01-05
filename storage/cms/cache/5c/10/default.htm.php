<?php 
class Cms5c2cd251f2c42525003701_01d09f2f43f0d46f5fc8d46403c7b51fClass extends \Cms\Classes\LayoutCode
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
