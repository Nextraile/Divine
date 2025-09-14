<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reminders extends Model
{
    protected $fillable =
    [
        'vision_id',
        'remind_at',
        'type',
        'is_sent',
        'message'
    ];

    protected $casts =
    [
        'remind_at' => 'datetime',
        'is_sent' => 'boolean',
    ];
}
