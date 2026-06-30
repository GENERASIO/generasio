<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $username
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $password_hint
 * @property $position
 * @property $address
 * @property $phone
 * @property $religion
 * @property $gender
 * @property $education
 * @property $marital_status
 * @property $birth_date
 * @property $profile_dir
 * @property $profile_image
 * @property $role_id
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 * @property $last_logged_in
 * @property $is_logged_in
 * @property $is_active
 * @property $logged_in_attempt
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
	
    static $rules = [
		'name' => 'required',
		'username' => 'required',
		'email' => 'required',
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','username', 'password','email','password_hint','position','address','phone','religion','gender','education','marital_status','birth_date','profile_dir','profile_image','role_id','last_logged_in','is_logged_in','is_active','logged_in_attempt', 'updated_at'];



	public function user()
	{
		return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}

	public function userUpdate()
	{
		return $this->belongsTo('App\Models\User', 'updated_by', 'id');
	}

}
