<?php

namespace App\Services\Table;

class FilterOptions {
    public function __construct(
        public string $component ,
        public string $model ,
        public ?string $column_class = null,
        public ?string $class = null ,
        public ?string $placeholder = null ,
        public ?string $label = null ,
        public ?string $icon = null,
        public ?array $options = null
    )
    {
    }
}
