<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

	use softDeletes;

	protected $fillable = [
		'title', 'content', 'category_id', 'featured', 'slug', 'user_id'
	];


	public function getFeaturedAttribute($featured)
 	{
 		return asset($featured);
 	}


	protected $dates = ['deleted_at'];


    public function category() 
    {
    	return $this->belongsTo(Category::class);
    }

    public function tags() {
    	return $this->belongsToMany('App\Tag');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
