<?php

namespace App\Services\Table;

class LinkGroup
{

    public array $links = [];

    public function addLink(string $content , string $route ,?string $class = null , ?string $color = null)
    {
        $this->links[] = [
            'component' => 'buttons.panel.link',
            'content' => $content,
            'route' => $route,
            'class' => $class,
            'color' => $color
        ];

        return $this;
    }

    public function toArray() : array
    {
        return $this->links;
    }
}
