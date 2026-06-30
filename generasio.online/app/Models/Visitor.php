<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 *
 * @property $id
 * @property $page
 * @property $device
 * @property $os
 * @property $browser
 * @property $ip
 * @property $ip_alternative
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
class Visitor extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page','device','os','browser','ip','ip_alternative','city','region','country','latitude','latitude_alternative','longitude','longitude_alternative','org','timezone','created_by','updated_by', 'updated_at'];

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function userUpdate()
	{
		return $this->belongsTo('App\Models\User', 'updated_by', 'id');
	}

}
