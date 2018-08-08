<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'program_id', 'title', 'slug', 'description', 'active'
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
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function programs()
    {
        return $this->belongsTo(Programs::class);
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function chapters()
    {
        return $this->hasMany(Chapters::class);
    }



}
