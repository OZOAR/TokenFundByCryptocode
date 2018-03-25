<?php

return [
    'title' => 'Админ-панель',

    'auth' => [
        'profile' => [
            'title' => 'Профиль',
            'settings' => 'Настройки профиля',
            'password' => 'Пароль',
            'password_confirmation' => 'Подтверждение пароля',
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

    'button' => [
        'submit' => 'Отправить',
        'reset' => 'Изменить',
    ],
];
