<?php

return [
    'title' => 'Админ-панель',
    'headers' => [
        'action' => 'Действие'
    ],

    'auth' => [
        'profile' => [
            'title' => 'Профиль',
            'settings' => 'Настройки профиля',
            'old_password' => 'Старый пароль',
            'password' => 'Новый пароль',
            'password_confirmation' => 'Подтвердить пароль',
        ],
        'logout'  => 'Выйти',
    ],

    'roles' => [
        'administrator' => 'Администратор',
        'client' => 'Клиент'
    ],

    'users' => [
        'title' => 'Пользователи',
        'manage' => 'Управление пользователями',
        'model' => [
            'username' => 'Никнейм',
            'email' => 'Email',
            'registration_date' => 'Дата регистрации',
            'last_pass_update' => 'Дата обновления пароля'
        ],
    ],

    'sidebar' => [
        'menu' => [
            'home' => 'Главная',
            'users' => [
                'index'    => 'Пользователи',
                'manage'   => 'Управление',
                'register' => 'Зарегистрировать',
            ],
            'requests' => 'Запросы',
            'statistics' => 'Статистика',
        ],
    ],

    'button' => [
        'submit' => 'Отправить',
        'reset' => 'Изменить',
        'view' => 'Просмотреть',
        'register' => 'Зарегистрировать',
    ],
];
