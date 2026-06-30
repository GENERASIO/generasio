<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property $id
 * @property $invoice_id
 * @property $snap_token
 * @property $vip_invoice
 * @property $status
 * @property $description
 * @property $invoice_url
 * @property $expire_date
 * @property $service_catalog_slug
 * @property $service_product_code
 * @property $price
 * @property $player_id
 * @property $server_id
 * @property $whatsapp
 * @property $email
 * @property $merchant_name
 * @property $payment_method
 * @property $payment_channel
 * @property $payment_destination
 * @property $paid_at
 * @property $created_at
 * @property $updated_at
 * @property $created_by
 * @property $updated_by
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaction extends Model
{
    
    static $rules = [
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['invoice_id','snap_token','vip_invoice','status','description','invoice_url','expire_date','service_catalog_slug','service_product_code','price','gamer_tag','player_id','server_id','whatsapp','email','merchant_name','payment_method','payment_channel','payment_destination','paid_at','created_by','updated_by', 'updated_at'];


	public function catalog()
	{
		return $this->belongsTo('App\Models\ServiceCatalog', 'service_catalog_slug', 'slug');
	}
	
    public function product()
	{
		return $this->belongsTo('App\Models\ServiceProduct', 'service_product_code', 'code');
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
