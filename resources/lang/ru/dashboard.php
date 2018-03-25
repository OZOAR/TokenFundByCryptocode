<?php

return [
    'title' => 'Админ-панель',

    'auth' => [
        'profile' => [
            'title' => 'Профиль',
            'settings' => 'Настройки профиля',
            'old_password' => 'Старый пароль',
            'password' => 'Пароль',
            'password_confirmation' => 'Подтвердить пароль',
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
