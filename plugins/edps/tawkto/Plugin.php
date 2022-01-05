<?php namespace Edps\TawkTo;

    use System\Classes\PluginBase;

    class Plugin extends PluginBase
    {
        public function pluginDetails()
        {
            return [
                'name'        => 'edps.tawkto::lang.plugin.name',
                'description' => 'edps.tawkto::lang.plugin.description',
                'author'      => 'EDPS - JM BRUNO',
                'icon'        => 'icon-comments-o'
            ];
        }

        public function registerComponents(){
            return [];
        return [
                'Edps\TawkTo\Components\TawkTo' => 'TawkTo',
        ];
        }

        public function registerSettings()
        {
        }
    }

?>
