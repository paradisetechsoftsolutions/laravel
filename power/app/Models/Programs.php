<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/


    //'title', 'slug', 'type', 'description', 'image', 'short_video', 'video', 'price', 'active',
    protected $fillable = [
        'title', 'slug', 'type', 'description', 'price', 'active'
    ];


    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = str_slug($model->title);
        });
    }

}
