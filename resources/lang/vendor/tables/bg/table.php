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

        'label' => 'Навигация по страниците',

        'overview' => '{1} Показване на 1 резултат|[2,*] Показване на :first до :last от :total резултати',

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
                'label' => 'Отидете на страница :page',
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
            'label' => 'Завършете организацията на записите',
        ],

        'enable_reordering' => [
            'label' => 'Реорганизирайте записите',
        ],

        'filter' => [
            'label' => 'Филтрирай',
        ],

        'open_actions' => [
            'label' => 'Отворете действията',
        ],

        'toggle_columns' => [
            'label' => 'Включи колони',
        ],

    ],

    'empty' => [

        'heading' => 'Няма намерени записи',

        'buttons' => [

            'reset_column_searches' => [
                'label' => 'Изчистете търсенето на колони',
            ],

        ],

    ],

    'filters' => [

        'buttons' => [

            'remove' => [
                'label' => 'Премахнете филтър',
            ],

            'remove_all' => [
                'label' => 'Премахнете всички филтри',
                'tooltip' => 'Премахнете всички филтри',
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

        'selected_count' => 'Избран 1 запис.|:count записа са избрани.',

        'buttons' => [

            'select_all' => [
                'label' => 'Селектирайте всички :count',
            ],

            'deselect_all' => [
                'label' => 'Деселектирайте всички',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Сортирайте по',
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
