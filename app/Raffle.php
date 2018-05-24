<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
    protected $fillable = [
        'name',
        'no_of_prizes',
        'total_value',
        'organisation',
        'last_selling_date',
        'draw_date',
        'draw_place',
        'max_tickets',
        'prize_per_ticket',
        'discount_multiple',
        'price',
        'status'
    ];
}
