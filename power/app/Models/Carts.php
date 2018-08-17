<?php

namespace power\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'users_id', 'programs_id'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function programs()
    {
        return $this->belongsTo(Programs::class);
    }
}
