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
        'profile' => [
            'title' => 'Профиль пользователя',
            'removed' => "удален",
        ],
        'actions' => [
            'delete' => [
                'success' => 'Пользователь успешно удалён.',
                'self_fail' => 'Вы не можете удалить сами себя.',
                'already' => 'Пользователь уже удалён.',
            ],
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
        'delete' => 'Удалить',
    ],

    'empty_field' => 'Не заполнено',
];
