<?php

namespace App\Services\Table;

use Closure;

class Column
{

    public array $columns = [];

    public function addColumn(string $type ,
                              string $title ,
                              string | Closure $key,
                              ?string $component = null ,
                              ?string $class = null ,
                              ?string $wireModel = null,
                              ?string $eventName = null,
                              ?array $actions = null,
                              ?array $options = null,
                              Closure $trash = null,
                              string | Closure | null $href = null,

    )
    {
        $this->columns[] = [
            'type' => $type,
            'component' => $component,
            'title' => $title,
            'key' => $key,
            'class' => $class,
            'wireModel' => $wireModel,
            'actions' => $actions,
            'eventName' => $eventName,
            'options' => $options,
            'trash' => $trash,
            'href' => $href,
        ];

        return $this;
    }

    public function toArray() : array
    {
        return $this->columns;
    }
}
