<?php

    return [
        'plugin' => [
            'name'              => 'Tawk To',
            'description'       => 'Lets you monitor and chat with visitors on your website'
        ],

        'components' => [
            'tawkto' => [
                'name' => 'Tawk To',
                'description' => 'Window Chat',
                'apikey' => [
                    'value' => [
                        'title' => 'API key',
                        'description' => 'Api key Tawk To',
                    ],
                ],
                'widgetname' => [
                    'value' => [
                        'title' => 'Widget name',
                        'description' => 'Widget name on Tawk To website',
                    ],
                ],
            ],
        ],
    ];

?>
