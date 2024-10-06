<?php

namespace App\Enums;

enum PostStatus: string
{
    use DynamicName;

    case PUBLISHED = 'publish';

    case DRAFT = 'draft';
}
