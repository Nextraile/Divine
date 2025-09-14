<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubVision extends Model
{
    protected $fillable =
    [
        'vision_id',
        'title',
        'description',
        'completed',
        'completed_at',
        'order'
    ];

    protected $casts =
    [
        'completed' => 'boolean',
        'compleed_at' =>'datetime',
        'order' => 'integer'
    ];
}
