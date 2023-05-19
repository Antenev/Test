<?php

return [

    'title' => 'Вписване',

    'heading' => 'Влез в своя акаунт',

    'buttons' => [

        'submit' => [
            'label' => 'Влез',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'Имейл адрес',
        ],

        'password' => [
            'label' => 'Парола',
        ],

        'remember' => [
            'label' => 'Запомни ме',
        ],

    ],

    'messages' => [
        'failed' => 'These credentials do not match our records.',
        'throttled' => 'Too many login attempts. Please try again in :seconds seconds.',
    ],

];
