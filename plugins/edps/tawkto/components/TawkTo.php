<?php namespace Edps\TawkTo\Components;

use Cms\Classes\ComponentBase;
use \stdClass;

class TawkTo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'edps.tawkto::lang.components.tawkto.name',
            'description' => 'edps.tawkto::lang.components.tawkto.description'
        ];
    }
  	public function defineProperties()
    {
        return [
            'apikey' => [
                'title'             => 'edps.tawkto::lang.components.tawkto.apikey.value.title',
                'description'       => 'edps.tawkto::lang.components.tawkto.apikey.value.description',
                'default'           => '594927ebe9c6d324a473662f',
                'type'              => 'string',
            ],{
                // The tab key will cycle through the settings when first created
                // Visit http://wbond.net/sublime_packages/sftp/settings for help
                
                // sftp, ftp or ftps
                "type": "sftp",
            
                "sync_down_on_open": true,
                "sync_same_age": true,
                
                "host": "example.com",
                "user": "username",
                //"password": "password",
                //"port": "22",
                
                "remote_path": "/example/path/",
                //"file_permissions": "664",
                //"dir_permissions": "775",
                
                //"extra_list_connections": 0,
            
                "connect_timeout": 30,
                //"keepalive": 120,
                //"ftp_passive_mode": true,
                //"ftp_obey_passive_host": false,
                //"ssh_key_file": "~/.ssh/id_rsa",
                //"sftp_flags": ["-F", "/path/to/ssh_config"],
                
                //"preserve_modification_times": false,
                //"remote_time_offset_in_hours": 0,
                //"remote_encoding": "utf-8",
                //"remote_locale": "C",
                //"allow_config_upload": false,
            }
            
            'widgetname' => [
                'title'             => 'edps.tawkto::lang.components.tawkto.widgetname.value.title',
                'description'       => 'edps.tawkto::lang.components.tawkto.widgetname.value.description',
                'default'           => 'default',
                'type'              => 'text',
            ],
        ];
    }
  	public function onRun()
    {
        $TawkTo = new stdClass();

        $TawkTo->apikey             = $this->property('apikey');
        $TawkTo->widgetname         = $this->property('widgetname');

        $this->page['dataToTawkTo'] = $TawkTo;
   	}

}
