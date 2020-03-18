<?php

use App\Models\Conversion;
use App\Models\Click;

return [
    'contact' => [
        'tag_title' => 'Контакты',
        'meta_description' => 'Контакты',
        'header' => 'Контакты',
        'sent' => 'Ваше Сообщение было успешно отправлено на почтый адрес',
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
                'label' => "Текст письма",
                'placeholder' => "Текст письма",
            ],
        ]
    ],
];
