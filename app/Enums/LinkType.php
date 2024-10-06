<?php

namespace App\Enums;

enum LinkType: string
{
    use DynamicName;

    case HEADER_DESKTOP = 'header_desktop';
    case HEADER_MOBILE = 'header_mobile';
    case FOOTER = 'footer';
}
