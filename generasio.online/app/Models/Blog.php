<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 *
 * @property $id
 * @property $slug
 * @property $status
 * @property $date_published
 * @property $title
 * @property $content
 * @property $blog_category_id
 * @property $file_dir
 * @property $file
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Blog extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['slug','status','date_published','title','content','blog_category_id','file_dir','file','created_by','updated_by', 'updated_at'];


	public function category()
	{
		return $this->belongsTo('App\Models\BlogCategory', 'blog_category_id', 'id');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function userUpdate()
	{
		return $this->belongsTo('App\Models\User', 'updated_by', 'id');
	}

}
