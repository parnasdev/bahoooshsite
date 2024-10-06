<?php

namespace App\Enums;

enum PostType:string
{
    use DynamicName;
    case POST = 'post';
    case PAGE = 'page';
    case PRODUCT = 'product';
}
