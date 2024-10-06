<?php

namespace App\Services;

use Closure;
use Exception;

class Sidebar
{
    public array $sidebars;
    private int $lastIndex = -1;
    public function addTitle(string $title) : static
    {
        $this->sidebars[] = [
            'title' => $title,
            'links' => []
        ];
        $this->lastIndex = count($this->sidebars) - 1;

        return $this;
    }


    public function addLink(string $title , ?string $icon = null , ?string $route = null , ?string $route_active = null , ?string $can = null , ?Closure $notice = null) : static
    {
        if ($this->lastIndex >= 0) {
            $link = [
                'title' => $title,
                'icon' => $icon,
                'route' => $route,
                'route_active' => $route_active,
                'can' => $can,
                'notice' => null
            ];

            if ($notice !== null) {
                $link['notice'] = $notice();
            }

            // Add the link to the last sidebar added
            $this->sidebars[$this->lastIndex]['links'][] = $link;
        } else {
            // Handle the case where no sidebar has been added yet
            throw new Exception("No sidebar has been added yet. Please add a sidebar title first.");
        }

        return $this;
    }

    public function toArray() : array {
        return $this->sidebars;
    }
}
