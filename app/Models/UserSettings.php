<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    protected $fillable =
    [
        'user_id',
        'reminder_hours_before',
        'website_notifications',
        'browser_notifications'
    ];

    protected $casts =
    [
        'reminder_hours_before' => 'integer',
        'website_notifications' => 'boolean',
        'browser_notifications' => 'boolean'
    ];
}
