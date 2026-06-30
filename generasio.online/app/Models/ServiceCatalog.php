<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceCatalog
 *
 * @property $id
 * @property $slug
 * @property $category
 * @property $main_category
 * @property $sub_category
 * @property $mini_category
 * @property $name
 * @property $description
 * @property $file_dir
 * @property $file
 * @property $guide_dir
 * @property $guide
 * @property $status
 * @property $require_server_id
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ServiceCatalog extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['slug','game_code','category','main_category','sub_category','mini_category','name','description','file_dir','file','guide_dir','guide','status','require_server_id','created_by','updated_by', 'updated_at'];

	public function productHigh()
	{
		return $this->hasMany('App\Models\ServiceProduct', 'slug', 'slug')->where('status', 'available')->orderBy('price', 'desc');
	}
	
	public function product()
	{
		return $this->hasMany('App\Models\ServiceProduct', 'slug', 'slug')->where('status', 'available')->orderBy('price', 'asc');
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
