<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Socmed
 *
 * @property $id
 * @property $name
 * @property $url
 * @property $status
 * @property $file_dir
 * @property $file
 * @property $icon
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Socmed extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','url','status','file_dir','file','icon','created_by','updated_by', 'updated_at'];



	public function user()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function userUpdate()
	{
		return $this->belongsTo('App\Models\User', 'updated_by', 'id');
	}

}
