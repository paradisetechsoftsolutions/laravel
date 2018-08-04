<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'module_id', 'title', 'slug', 'description', 'active'
    ];


    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            //create dynamic slug
            $model->slug = str_slug($model->title);
        });
    }

}
