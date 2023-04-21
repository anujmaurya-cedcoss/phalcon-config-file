<?php
// creating a phalcon config object
return new \Phalcon\Config([
    'base_uri' => dirname(__DIR__),

    'environment' => [
        'developer' => [
            'a' => 'Anuj',
            'b' => 'Satyam',
            'c' => 'Ayush'
        ],
        'production' => [

        ]
    ],
    'app_name' => 'myApp',
]);