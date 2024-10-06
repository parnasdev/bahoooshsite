<?php

namespace App\Enums;

enum CategoryType: string
{
    use DynamicName;
    case CATEGORY = 'category';
    case TAG = 'tag';
    case BRAND = 'brand';
}
