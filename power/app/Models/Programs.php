<?php

namespace power\Models;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'title', 'description', 'short_video', 'video', 'price', 'active'
    ];


    public static function boot()
    {
        parent::boot();

        // before delete() method call this
        static::deleting(function($program) {
            //delete the parents
            $program->modules()->delete();
        });
    }


    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function modules()
    {
        return $this->hasMany(Modules::class);
    }



}
