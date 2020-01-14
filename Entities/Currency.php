<?php

namespace Modules\Icurrency\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use Translatable;

    protected $table = 'icurrency__currencies';

    public $translatedAttributes = [
        'name'
    ];
    protected $fillable = [
        'code',
        'symbol_left',
        'symbol_right',
        'decimal_place',
        'value',
        'status',
        'default_currency',
        'options'
    ];

    protected $fakeColumns = ['options'];

    protected $casts = [
        'options' => 'array'
    ];
}