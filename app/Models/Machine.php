<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Machine
 *
 * @property $id
 * @property $code
 * @property $title
 * @property $description
 * @property $address
 * @property $location_prefix
 * @property $under_maintenance
 * @property $active
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Machine extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'title',
        'description',
        'address',
        'location_prefix',
        'under_maintenance',
        'active',
    ];

    protected $casts = [
        'under_maintenance' => 'boolean',
        'active' => 'boolean',
    ];
}
