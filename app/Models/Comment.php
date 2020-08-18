<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $attributes = [
        'rating' => 3,
        'user_id' => 12,
    ];
}
