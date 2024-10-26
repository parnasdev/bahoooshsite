<?php

namespace Harvest\Formbuilder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{

    protected $fillable = [
        'name',
        'code',
        'is_payable',
        'config',
        'fields',
        'btn_text',
        'inbox_count',
        'price',
        'sell_price'
    ];

    public function casts()
    {
        return [
            'is_payable' => 'boolean',
            'config' => 'array',
            'fields' => 'array',
        ];
    }

    public function formInputs() : HasMany
    {
        return $this->hasMany(FormInput::class);
    }

}
