<?php

namespace power\Models;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'programs_id', 'title', 'slug', 'description', 'active'
    ];


    public static function boot()
    {
        parent::boot();
        //after save or update method call this
        static::saving(function ($model) {
            //create dynamic slug         
            $model->slug = str_slug($model->title);
        });

        // before delete() method call this
        static::deleting(function($module) {
            //delete the parents
            $module->chapters()->delete();
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
