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
            'requests' => 'Запросы',
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

    'requests' => [
        'title' => 'Запросы',
        'show_title' => 'Просмотр запроса',
        'empty_collection' => 'Список запросов пуст.',
        'model' => [
            'name' => 'Запрос',
            'owner' => 'Отправитель',
            'created_at' => 'Дата создания',
            'message' => 'Сообщение',
        ],
    ],

    'statistics' => [
        'title' => 'Статистика',
        'main_graph_title' => 'Основной график',
        'portfolio_graph_title' => 'График портфеля',
        'preview' => 'Предпросмотр',
        'empty' => 'Нет данных для наполнения.',
        'transaction_fail' => 'Не удалось обновить данные графика. Возможно у вас есть дубликаты.',
        'transaction_success' => 'Данные графика успешно обновлены.',
    ],

    'users' => [
        'title' => 'Пользователи',
        'manage' => 'Управление пользователями',
        'register' => 'Регистрация пользователя',
        'model' => [
            'name' => 'Никнейм',
            'email' => 'Email',
            'password' => 'Пароль',
            'registration_date' => 'Дата регистрации',
            'last_pass_update' => 'Дата обновления пароля'
        ],
        'profile' => [
            'title' => 'Профиль пользователя',
            'removed' => "удален",
        ],
        'empty_collection' => 'Список пользователей пуст.',
        'actions' => [
            'delete' => [
                'success' => 'Пользователь успешно удалён.',
                'self_fail' => 'Вы не можете удалить сами себя.',
                'already' => 'Данный пользователь уже удалён.',
            ],
            'create' => [
                'success' => 'Пользователь успешно создан.',
                'fail' => 'Невозможно создать пользователя. Ошибка сервера',
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
        'update' => 'Обновить',
        'view' => 'Просмотреть',
        'register' => 'Зарегистрировать',
        'delete' => 'Удалить',
    ],

    'empty_field' => 'Не заполнено',
];
