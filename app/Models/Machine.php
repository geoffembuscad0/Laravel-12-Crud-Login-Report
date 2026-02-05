<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    //
    protected $fillable = [
        'name',
        'serial_number',
        'location',
        'is_active',
    ];
}
