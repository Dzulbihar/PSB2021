<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{

    use Sluggable;
    
	protected $fillable = ['title','content','thumbnail','slug','user_id'];
	protected $dates = ['created_at'];

/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


	public function user()
	{
		return $this->belongsTo(User::class);
	}

///////////// looping berita di controller ke home 
	public function thumbnail()
	{
		
		if($this->thumbnail){
			return $this->thumbnail;
		}
		else{
			return asset('nothumbnail.jpg');
		}

//		if(!$this->thumbnail){
//			return asset('nothumbnail.jpg');
//		}
//		return $this->thumbnail;

//		return !$this->thumbnail ? asset('nothumbnail.jpg') : $this->thumbnail ;

	}


}
