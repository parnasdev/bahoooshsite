<?php

namespace App\Enums;

enum BlockCategory: string
{
    case MEDIA_SLIDER = 'media_slider';
    case SUPPORT = 'support';
    case OFFER_SLIDER = 'offer_slider';
    case BANNER = 'banner';
    case PRODUCT_SLIDER = 'product_slider';
    case BLOG = 'blog';
    case CATEGORY = 'category';
    case FAQ = 'faq';
    case CUSTOMER_COMMENT = 'customer_comment';
    case NEWSLETTER = 'newsletter';
    case BRAND = 'brand';
    case GENERAL = 'general';
}
