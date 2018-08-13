<?php

namespace power\Models;

use Illuminate\Database\Eloquent\Model;

class ChaptersUploads extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'chapter_id', 'name', 'type'
    ];


    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function chapter()
    {
        return $this->belongsTo(Chapters::class);
    }

}
