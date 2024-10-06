<?php

namespace App\Services\Table;


class FilterGroup
{
    public array $filters = [];

    public function addFilter(FilterOptions $options): static
    {
        $this->filters[] = [
            'component' => $options->component,
            'model' => $options->model,
            'options' => $options->options,
            'class' => $options->class,
            'placeholder' => $options->placeholder,
            'label' => $options->label,
            'column_class' => $options->column_class,
            'icon' => $options->icon,
        ];

        return $this;
    }

    public function toArray() : array
    {
        return $this->filters;
    }
}
