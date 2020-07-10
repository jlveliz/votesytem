<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'name',
        'description',
        'img_path',
        'enabled',
        'type',
    ];
}
