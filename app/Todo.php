<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // for set a defult value
    protected $attributes = [
        'compleate' => false,
    ];
}
