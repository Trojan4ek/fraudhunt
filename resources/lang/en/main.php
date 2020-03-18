<?php

use App\Models\Conversion;
use App\Models\Click;

return [
    'send' => "Отправить",
    'index' => [
        'tag_title' => 'FRAUDHUNT',
    ],
    'advices' => [
        'tag_title' => 'Полезные советы',
    ],
    'rules' => [
        'tag_title' => 'Правила использования сервиса',
    ],
    'login' => [
        'tag_title' => 'Вход',
        'fields' => [
            'email' => [
                'label' => "Адрес электронной почты",
                'placeholder' => "example@mail.com",
            ],
            'password' => [
                'label' => "Пароль",
                'placeholder' => "********",
            ],
        ]
    ],
    'create' => [
        'tag_title' => 'Добавить мошенника',
        'msg' => 'Добавить мошенника',
        'fields' => [
            'f_name' => [
                'label' => "ФИО",
                'placeholder' => "Иванов Иван Иванович",
            ],
            'description' => [
                'label' => "Подробнее",
                'placeholder' => "Подробнее",
            ],
            'phone1' => [
                'label' => "Телефон №1",
                'placeholder' => "0930000000",
            ],
            'phone2' => [
                'label' => "Телефон №2",
                'placeholder' => "0670000000",
            ],
            'card1' => [
                'label' => "Номер карты",
                'placeholder' => "0000000000000000",
            ]
        ]
        ],
    'contact' => [
        'tag_title' => 'Контакты',
        'meta_description' => 'Контакты',
        'header' => 'Контакты',
        'sent' => 'Ваше Сообщение было успешно отправлено на почтый адрес',
        'msg1' => 'Если у вас есть бизнес предложения или другие вопросы, пожалуйста заполните форму. Спасибо.',
        'fields' => [
            'full_name' => [
                'label' => "ФИО",
                'placeholder' => "Иванов Иван Иванович",
            ],
            'email' => [
                'label' => "Електронный адрес",
                'placeholder' => "example@mail.com",
            ],
            'topic' => [
                'label' => "Тема",
                'placeholder' => "Тема",
            ],
            'body' => [
                'label' => "Сообщение",
                'placeholder' => "Текст сообщения",
            ],
        ]
    ],
];
