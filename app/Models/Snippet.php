<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    public $fillable = [
        'name',
        'code',
        'description',
        'language',
    ];
}
