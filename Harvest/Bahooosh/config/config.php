<?php
/*
 * Package Config
 */
return [
    'components' => [
        array(
            'name' => 'bahooosh::components.general.column-section',
            'title' => 'ستون ها',
            'data' => [],
            'is_livewire' => true,
            'category' => 'general'
        ),
        array(
            'name' => 'bahooosh::components.general.section',
            'title' => 'بخش',
            'data' => [
                'class' => '',
                'column' => 1
            ],
            'is_livewire' => true,
            'category' => 'general'
        ),
        array(
            'name' => 'bahooosh::components.general.hero-section',
            'title' => 'هیرو',
            'data' => [],
            'is_livewire' => true,
            'category' => 'general'
        ),
        array(
            'name' => 'bahooosh::components.general.hero2-section',
            'title' => 'هیرو 2',
            'data' => [],
            'is_livewire' => true,
            'category' => 'general'
        ),
        array(
            'name' => 'bahooosh::components.general.empty-box',
            'title' => 'باکس خالی',
            'data' => [],
            'is_livewire' => true,
            'category' => 'general'
        ),
        array(
            'name' => 'bahooosh::thumbnails.service-box',
            'title' => 'باکس سرویس',
            'data' => [
                'class_desktop' => '',
                'class_mobile' => '',
                'title' => '',
                'description' => '',
                'image_url' => '',
            ],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.buildstore-section',
            'title' => 'ساختن فروشگاه',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.service-section',
            'title' => 'سرویس ها',
            'data' => [
                'class' => '',
                'title' => '',
                'icon' => '',
                'column' => 4
            ],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.package-section',
            'title' => 'پکیچ ها/نمونه کارها',
            'data' => [
                'class' => '',
                'title' => '',
                'icon' => '',
                'column' => 8
            ],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::thumbnails.package-thumbnail',
            'title' => 'باکس پکیج/نمونه کارها',
            'data' => [
                'title' => '',
                'subtitle_type' => 1,
                'subtitle' => 0,
                'subtitle_url' => '',
                'description' => '',
                'image_url' => '',
            ],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.service-image-section',
            'title' => 'سرویس ها + عکس',
            'data' => [
                'class' => '',
                'title' => '',
                'icon' => '',
                'image_url' => '',
                'reverse' => false,
                'column' => 6
            ],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.service-image2-section',
            'title' => 'سرویس ها + عکس 2',
            'data' => [
                'class' => '',
                'title' => '',
                'description' => '',
                'image_url' => '',
                'column' => 2
            ],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.customer-comment.comment-section',
            'title' => 'نظر مشتریان',
            'data' => [
                'title' => '',
                'comments' => [],
            ],
            'is_livewire' => true,
            'category' => 'customer_comment'
        ),
        array(
            'name' => 'bahooosh::components.customer-comment.comment2-section',
            'title' => 'نظر مشتریان 2',
            'data' => [
                'title' => '',
                'comments' => [],
            ],
            'is_livewire' => true,
            'category' => 'customer_comment'
        ),
        array(
            'name' => 'bahooosh::components.support.createstore-section',
            'title' => 'مراحل ساخت',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.plans-section',
            'title' => 'پلن ها',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.plans2-section',
            'title' => 'پلن 2 ها',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.plans-service-section',
            'title' => 'خدمات پلن ها',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.contact-section',
            'title' => 'کادر تماس باما',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.support.contact2-section',
            'title' => 'کادر تماس 2 باما',
            'data' => [],
            'is_livewire' => true,
            'category' => 'support'
        ),
        array(
            'name' => 'bahooosh::components.faq.faq-section',
            'title' => 'سوالات متداول',
            'data' => [],
            'is_livewire' => true,
            'category' => 'faq'
        ),

        array(
            'name' => 'bahooosh::components.blog.blogs-section',
            'title' => 'لیست وبلاگ ها',
            'data' => [],
            'is_livewire' => true,
            'category' => 'blog'
        ),
        array(
            'name' => 'bahooosh::components.blog.blog-filter',
            'title' => 'لیست وبلاگ ها(فیلتر)',
            'data' => [],
            'is_livewire' => true,
            'category' => 'blog'
        ),
        array(
            'name' => 'bahooosh::components.banner.banner-slider',
            'title' => 'اسلایدر بنر',
            'data' => [
                'banners' => []
            ],
            'is_livewire' => true,
            'category' => 'banner'
        ),
        array(
            'name' => 'bahooosh::components.general.single-image',
            'title' => 'عکس تکی',
            'data' => [],
            'is_livewire' => true,
            'category' => 'general'
        ),
        array(
            'name' => 'bahooosh::components.general.form-image-section',
            'title' => 'فرم با عکس',
            'data' => [],
            'is_livewire' => true,
            'category' => 'general'
        ),
    ]
];
