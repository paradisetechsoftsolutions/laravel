<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'abbreviation', 'active',
    ];
}
