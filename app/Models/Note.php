<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Note extends Model
{
    public function index()
    {
        return $this->belongsTo(User::class);
    }
}
