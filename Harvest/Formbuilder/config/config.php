<?php
/*
 * Package Config
 */
return [
    'inbox' => [
        'storage' => storage_path('inboxes/'),
        'max_data' => null, // null mean unlimited
        'prefix' => null,
    ],

    'permissions' => array(
        array('name' => 'forms.read', 'label' => 'خواندن فرم ها', 'roles' => ['admin']),
        array('name' => 'forms.create', 'label' => 'ایجاد فرم ها', 'roles' => ['admin']),
        array('name' => 'forms.edit', 'label' => 'ویرایش فرم ها', 'roles' => ['admin']),
        array('name' => 'forms.delete', 'label' => 'حذف فرم ها', 'roles' => ['admin']),
    ),

    'inputs' => [
        array(
            'name' => 'inputs.home.floating-text',
            'title' => 'فیلد تک خطی',
            'data' => [],
            'type' => 1,
            'category' => 'field',
        ),
        array(
            'name' => 'inputs.home.textarea',
            'title' => 'فیلد چند خطی',
            'data' => [],
            'type' => 4,
            'category' => 'field',
        ),
        array(
            'name' => 'inputs.home.floating-number',
            'title' => 'فیلد عددی',
            'data' => [],
            'type' => 2,
            'category' => 'field',
        ),
        array(
            'name' => 'inputs.home.floating-phone',
            'title' => 'فیلد شماره‌همراه',
            'data' => [],
            'type' => 1,
            'category' => 'field',
        ),
        array(
            'name' => 'inputs.home.floating-email',
            'title' => 'فیلد ایمیل',
            'data' => [],
            'type' => 1,
            'category' => 'field',
        )
    ]
];
