<?php

/**
 * Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2015, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
    'Users' => [
        'Registration' => [
            //determines if the register is enabled
            'active' => false,
        ],
        'Profile' => [
            //Allow view other users profiles
            'viewOthers' => false,
            'route' => ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'profile'],
        ],
    ],
    //default configuration used to auto-load the Auth Component, override to change the way Auth works
    'Auth' => [
        'Identifiers' => [
            'Password' => [
                'resolver' => [
                    'finder' => 'auth',
                ],
            ],
        ],
    ],
];

return $config;
