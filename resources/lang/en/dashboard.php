<?php

return [
    'title' => 'Dashboard',

    'auth' => [
        'profile' => [
            'title' => 'Profile',
            'settings' => 'Profile settings',
            'password' => 'Password',
            'password_confirmation' => 'Password confirmation',
        ],
        'logout'  => 'Log out',
    ],

    'roles' => [
        'administrator' => 'Administrator',
        'client' => 'Client'
    ],

    'sidebar' => [
        'menu' => [
            'home' => 'Home',
            'users' => [
                'index'    => 'Users',
                'manage'   => 'Manage',
                'register' => 'Register new',
            ],
            'requests' => 'Requests',
            'statistics' => 'Statistics',
        ],
    ],

    'button' => [
        'submit' => 'Submit',
        'reset' => 'Reset',
    ],
];
