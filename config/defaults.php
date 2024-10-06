<?php

return [
    'roles' => [
        array('name' => 'admin', 'label' => 'مدیر کل سایت', 'is_access_panel' => true , 'is_access_dashboard' => false , 'is_custom' => false , 'custom_route_name_access' => null , 'is_default' => true),
        array('name' => 'writer', 'label' => 'نویسنده', 'is_access_panel' => true , 'is_access_dashboard' => false , 'is_custom' => false , 'custom_route_name_access' => null, 'is_default' => true),
        array('name' => 'user', 'label' => 'کاربر', 'is_access_panel' => false , 'is_access_dashboard' => true , 'is_custom' => false , 'custom_route_name_access' => null, 'is_default' => true),
    ],
    'permissions' => array(
        array('name' => 'posts.read', 'label' => 'خواندن نوشته ها' , 'roles' => ['admin' , 'writer']),
        array('name' => 'posts.create', 'label' => 'ایجاد نوشته ها' , 'roles' => ['admin' , 'writer']),
        array('name' => 'posts.edit', 'label' => 'ویرایش نوشته ها' , 'roles' => ['admin' , 'writer']),
        array('name' => 'posts.delete', 'label' => 'حذف نوشته ها' , 'roles' => ['admin']),
        array('name' => 'posts.status', 'label' => 'تغییر وضعیت نوشته ها'  , 'roles' => ['admin']),

        array('name' => 'categories.read', 'label' => 'خواندن دسته بندی ها','roles' => ['admin' , 'writer']),
        array('name' => 'categories.create', 'label' => 'ایجاد دسته بندی ها','roles' => ['admin' , 'writer']),
        array('name' => 'categories.edit', 'label' => 'ویرایش دسته بندی ها','roles' => ['admin' , 'writer']),
        array('name' => 'categories.delete', 'label' => 'حذف دسته بندی ها','roles' => ['admin']),

        array('name' => 'links.read', 'label' => 'خواندن منو ها','roles' => ['admin']),
        array('name' => 'links.create', 'label' => 'ایجاد منو ها','roles' => ['admin']),
        array('name' => 'links.edit', 'label' => 'ویرایش منو ها','roles' => ['admin']),
        array('name' => 'links.delete', 'label' => 'حذف منو ها','roles' => ['admin']),

        array('name' => 'pages.read', 'label' => 'خواندن صفحه ها','roles' => ['admin', 'writer']),
        array('name' => 'pages.create', 'label' => 'ایجاد صفحه ها','roles' => ['admin', 'writer']),
        array('name' => 'pages.edit', 'label' => 'ویرایش صفحه ها','roles' => ['admin', 'writer']),
        array('name' => 'pages.delete', 'label' => 'حذف صفحه ها','roles' => ['admin']),
        array('name' => 'pages.status', 'label' => 'تغییر وضعیت صفحه ها','roles' => ['admin']),

        array('name' => 'roles.read', 'label' => 'خواندن مقام ها','roles' => ['admin']),
        array('name' => 'roles.create', 'label' => 'ایجاد مقام ها','roles' => ['admin']),
        array('name' => 'roles.edit', 'label' => 'ویرایش مقام ها','roles' => ['admin']),
        array('name' => 'roles.delete', 'label' => 'حذف مقام ها','roles' => ['admin']),

        array('name' => 'settings.read', 'label' => 'خواندن تنظیمات ها','roles' => ['admin']),
        array('name' => 'settings.edit', 'label' => 'ویرایش تنظیمات ها','roles' => ['admin']),

        array('name' => 'tags.read', 'label' => 'خواندن تگ ها','roles' => ['admin', 'writer']),
        array('name' => 'tags.create', 'label' => 'ایجاد تگ ها','roles' => ['admin', 'writer']),
        array('name' => 'tags.edit', 'label' => 'ویرایش تگ ها','roles' => ['admin', 'writer']),
        array('name' => 'tags.delete', 'label' => 'حذف تگ ها','roles' => ['admin']),

        array('name' => 'users.read', 'label' => 'خواندن کاربر ها','roles' => ['admin']),
        array('name' => 'users.create', 'label' => 'ایجاد کاربر ها','roles' => ['admin']),
        array('name' => 'users.edit', 'label' => 'ویرایش کاربر ها','roles' => ['admin']),
        array('name' => 'users.delete', 'label' => 'حذف کاربر ها','roles' => ['admin']),

        array('name' => 'comments.read', 'label' => 'خواندن نظرات','roles' => ['admin']),
        array('name' => 'comments.approved', 'label' => 'تایید نظرات','roles' => ['admin']),
        array('name' => 'comments.reply', 'label' => 'پاسخ نظرات','roles' => ['admin']),
        array('name' => 'comments.delete', 'label' => 'حذف نظرات','roles' => ['admin']),

        array('name' => 'files', 'label' => 'دسترسی به فایل ها','roles' => ['admin' , 'writer']),
    ),
    'settings' => [
        'siteTitle' => 'آژانس خلاقیت پارناس',
        'separator' => ' | ',
        'siteTitle_before' => false,
        'keywords' => '',
        'favicon' => '',
        'siteLogos' => '',
        'post_thumbnail_default' => '',
        'profile_image_default' => '',
        'footer' => [],
        'header' => [],
        'header_banner' => [],
        'logo_size' => [],
    ]
];
