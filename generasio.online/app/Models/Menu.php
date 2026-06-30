<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property $id
 * @property $parent_id
 * @property $title
 * @property $url
 * @property $status
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Menu extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id','title','url','status','created_by','updated_by', 'updated_at'];


	public function submenu()
	{
		return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
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
