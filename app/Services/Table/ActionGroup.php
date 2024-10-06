<?php

namespace App\Services\Table;

class ActionGroup
{
    public array $actions = [];

    public function addCreateBtn(string $route, string $can = '')
    {
        $this->actions[] = [
            'type' => 'create_btn',
            'component' => 'actions.panel.create-button',
            'route' => $route,
            'can' => $can
        ];

        return $this;
    }

    public function addTrashBtn(bool $trash, string $can = '')
    {
        $this->actions[] = [
            'type' => 'trash_btn',
            'component' => 'actions.panel.trash-button',
            'trash' => $trash,
            'can' => $can
        ];

        return $this;
    }

    public function addActionSelect(bool $trash, string $wireModel, string $can = '')
    {
        $this->actions[] = [
            'type' => 'action_select',
            'component' => 'actions.panel.action-select',
            'trash' => $trash,
            'wire:model' => $wireModel,
            'can' => $can
        ];

        return $this;
    }

    public function toArray(): array
    {
        return $this->actions;
    }
}
