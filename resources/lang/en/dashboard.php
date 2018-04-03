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
            'requests' => 'Requests',
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

    'requests' => [
        'title' => 'Requests',
        'show_title' => 'Showing request',
        'empty_collection' => 'Requests list is empty.',
        'model' => [
            'owner' => 'Sender',
            'created_at' => 'Created at',
            'message' => 'Message',
        ],
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
        'register' => 'Register a user',
        'model' => [
            'name' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'registration_date' => 'Registration date',
            'last_pass_update' => 'Last password update'
        ],
        'profile' => [
            'title' => 'User profile',
            'removed' => "removed",
        ],
        'empty_collection' => 'Users list is empty.',
        'actions' => [
            'delete' => [
                'success' => 'User successfully deleted.',
                'self_fail' => 'You can\'t delete yourself.',
                'already' => 'The user already deleted.',
            ],
            'create' => [
                'success' => 'User successfully deleted.',
                'fail' => 'Can\'t create user. Server error.',
            ],
        ],
    ],

    'button' => [
        'submit' => 'Submit',
        'reset' => 'Reset',
        'view' => 'View',
        'register' => 'Register new',
        'delete' => 'Delete',
    ],

    'empty_field' => 'Empty',
];
