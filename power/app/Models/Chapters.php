<?php

namespace power\Models;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'programs_id', 'modules_id', 'title', 'slug', 'video', 'description', 'active'
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
        static::deleting(function($chapter) {
            //delete the parents
            $chapter->chaptersupload()->delete();
        });
    }


    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function modules()
    {
        return $this->belongsTo(Modules::class);
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function chaptersupload()
    {
        return $this->hasMany(ChaptersUploads::class);
    }

}
