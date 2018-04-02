<?php

return [
    'title' => 'Dashboard',

    'headers' => [
        'action' => 'Action'
    ],

    'auth' => [
        'profile' => [
            'title' => 'Profile',
            'settings' => 'Profile settings',
            'old_password' => 'Old password',
            'password' => 'New password',
            'password_confirmation' => 'Confirm password',
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

    'users' => [
        'title' => 'Users',
        'manage' => 'Manage users',
        'model' => [
            'username' => 'Username',
            'email' => 'Email',
            'registration_date' => 'Registration date',
            'last_pass_update' => 'Last password update'
        ],
    ],

    'button' => [
        'submit' => 'Submit',
        'reset' => 'Reset',
        'view' => 'View',
    ],
];
