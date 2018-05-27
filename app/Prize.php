<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $fillable = [
        'name',
        'number',
        'description',
        'val'
    ];
}
