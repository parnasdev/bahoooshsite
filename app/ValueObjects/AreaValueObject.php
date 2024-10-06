<?php

namespace App\ValueObjects;

class AreaValueObject
{
    public function __construct(
        public ?string $left = null,
        public ?string $right = null,
        public ?string $top = null,
        public ?string $bottom = null,
        public string $type = 'px',
    )
    {
    }

    public function toArray() : array
    {
        return [
            'left' => $this->left,
            'right' => $this->right,
            'top' => $this->top,
            'bottom' => $this->bottom,
            'type' => $this->type,
        ];
    }
}
