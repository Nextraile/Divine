<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vision extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'user_id',
        'parent_id',
        'title',
        'description',
        'due_date',
        'priority',
        'status'
    ];

    protected $casts =
    [
        'due_date' => 'datetime',
        'priority' => 'string',
        'status' => 'string'
    ];
}
