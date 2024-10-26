<?php

namespace Harvest\Formbuilder\Models;

use Harvest\Formbuilder\Enums\ComponentType;
use Harvest\Formbuilder\Enums\DataType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormInput extends Model
{
    protected $fillable = [
        'parent_id',
        'form_id',
        'component_name',
        'component_type',
        'data',
        'input_label',
        'input_name',
        'input_class',
        'data_type',
        'data_options',
        'required',
        'unique',
        'extra_rule',
        'order_item',
    ];

    public function casts()
    {
        return [
            'data' => 'array',
            'data_options' => 'array',
            'required' => 'boolean',
            'unique' => 'boolean',
            'extra_rule' => 'array',
            'component_type' => ComponentType::class,
            'data_type' => DataType::class,
        ];
    }

    public function children() : HasMany
    {
        return $this->hasMany(FormInput::class, 'parent_id');
    }

    public function form() : BelongsTo
    {
        return $this->belongsTo(Form::class, 'form_id');
    }
}
