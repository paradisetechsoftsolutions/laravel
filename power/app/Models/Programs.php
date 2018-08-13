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
        'title', 'slug', 'description', 'short_video', 'video', 'price', 'active'
    ];


    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            //create dynamic slug
            $model->slug = str_slug($model->title);
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
