<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value'
    ];


    /**
     * value cast
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function value(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => is_array(json_decode($value , true)) ? json_decode($value , true) : $value ,
            set: fn ($value) =>  is_array($value) ? json_encode($value) : $value,
        );
    }

}
