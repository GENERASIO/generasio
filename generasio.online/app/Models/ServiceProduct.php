<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceProduct
 *
 * @property $id
 * @property $slug
 * @property $code
 * @property $game
 * @property $name
 * @property $buy_price
 * @property $profit_price
 * @property $profit
 * @property $price
 * @property $status
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
class ServiceProduct extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['slug','code','game','name','buy_price','profit_price','profit','price','status','file_dir','file','created_by','updated_by', 'updated_at'];

    public function catalog()
	{
		return $this->belongsTo('App\Models\ServiceCatalog', 'slug', 'slug');
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
