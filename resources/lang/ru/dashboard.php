<?php

return [
    'title' => 'Админ-панель',

    'auth' => [
        'profile' => [
            'title' => 'Профиль',
            'settings' => 'Настройки профиля',
        ],
        'logout'  => 'Выйти',
    ],

    'roles' => [
        'administrator' => 'Администратор',
        'client' => 'Клиент'
    ],

    'sidebar' => [
        'menu' => [
            'home' => 'Главная',
            'users' => [
                'index'    => 'Пользователи',
                'manage'   => 'Управление',
                'register' => 'Регистрация',
            ],
            'requests' => 'Запросы',
            'statistics' => 'Статистика',
        ],
    ],
];
