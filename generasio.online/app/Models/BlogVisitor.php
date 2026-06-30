<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogVisitor
 *
 * @property $id
 * @property $blog_id
 * @property $page
 * @property $device
 * @property $os
 * @property $browser
 * @property $ip
 * @property $city
 * @property $region
 * @property $country
 * @property $latitude
 * @property $longitude
 * @property $org
 * @property $timezone
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BlogVisitor extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['blog_id','page','device','os','browser','ip','city','region','country','latitude','longitude','org','timezone','created_by','updated_by', 'updated_at'];



	public function user()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function userUpdate()
	{
		return $this->belongsTo('App\Models\User', 'updated_by', 'id');
	}

}
