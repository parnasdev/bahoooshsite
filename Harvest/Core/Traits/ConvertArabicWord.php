<?php

namespace Harvest\Core\Traits;

trait ConvertArabicWord
{
    public array $characters = [
        'ك' => 'ک',
        'دِ' => 'د',
        'بِ' => 'ب',
        'زِ' => 'ز',
        'ذِ' => 'ذ',
        'شِ' => 'ش',
        'سِ' => 'س',
        'ى' => 'ی',
        'ي' => 'ی',
        '١' => '۱',
        '٢' => '۲',
        '٣' => '۳',
        '٤' => '۴',
        '٥' => '۵',
        '٦' => '۶',
        '٧' => '۷',
        '٨' => '۸',
        '٩' => '۹',
        '٠' => '۰',
        '‌' => ' '
    ];


    public function convertArabic(string $string) : string
    {
        return str_replace(array_keys($this->characters), array_values($this->characters),$string);
    }
}
