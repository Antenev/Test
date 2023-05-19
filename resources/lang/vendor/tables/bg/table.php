<?php

return [

    'columns' => [

        'tags' => [
            'more' => 'and :count more',
        ],

        'messages' => [
            'copied' => 'Копирано',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Изберете/премахнете отметката от всички елементи за групови действия.',
        ],

        'bulk_select_record' => [
            'label' => 'Изберете/премахнете елемент :key за групови действия.',
        ],

        'search_query' => [
            'label' => 'Търсене',
            'placeholder' => 'Търсене',
        ],

    ],

    'pagination' => [

        'label' => 'Pagination Navigation',

        'overview' => '{1} Показване на 1 резултат|[2,*] Показване на :first to :last of :total резултати',

        'fields' => [

            'records_per_page' => [

                'label' => 'на страница',

                'options' => [
                    'all' => 'всички',
                ],

            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Отиди на страница :page',
            ],

            'next' => [
                'label' => 'Следваща',
            ],

            'previous' => [
                'label' => 'Предишна',
            ],

        ],

    ],

    'buttons' => [

        'disable_reordering' => [
            'label' => 'Завърши организацията на записите',
        ],

        'enable_reordering' => [
            'label' => 'Реорганизирай записите',
        ],

        'filter' => [
            'label' => 'Филтрирай',
        ],

        'open_actions' => [
            'label' => 'Отвори действията',
        ],

        'toggle_columns' => [
            'label' => 'Включи колони',
        ],

    ],

    'empty' => [

        'heading' => 'Няма намерени записи',

        'buttons' => [

            'reset_column_searches' => [
                'label' => 'Изчисти търсенето на колони',
            ],

        ],

    ],

    'filters' => [

        'buttons' => [

            'remove' => [
                'label' => 'Премахни филтър',
            ],

            'remove_all' => [
                'label' => 'Премахни всички филтри',
                'tooltip' => 'Премахни всички филтри',
            ],

            'reset' => [
                'label' => 'Нулиране на филтрите',
            ],

        ],

        'indicator' => 'Активни филтри',

        'multi_select' => [
            'placeholder' => 'Всички',
        ],

        'select' => [
            'placeholder' => 'Всички',
        ],

        'trashed' => [

            'label' => 'Изтрити записи',

            'only_trashed' => 'Само изтрити записи',

            'with_trashed' => 'С изтрити записи',

            'without_trashed' => 'Без изтрити записи',

        ],

    ],

    'reorder_indicator' => 'Плъзнете и пуснете записите в ред .',

    'selection_indicator' => [

        'selected_count' => 'Избран 1 запис.|:count records selected.',

        'buttons' => [

            'select_all' => [
                'label' => 'Селектирай всички :count',
            ],

            'deselect_all' => [
                'label' => 'Deselect all',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Сортирай по',
            ],

            'direction' => [

                'label' => 'Посока на сортиране',

                'options' => [
                    'asc' => 'Възходящ',
                    'desc' => 'Низходящ',
                ],

            ],

        ],

    ],

];
