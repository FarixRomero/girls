<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property AdvertisementService[] $advertisementServices
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function advertisementServices()
    // {
    //     return $this->hasMany('App\Models\AdvertisementService', 'service_id', 'id');
    // }
    
    public function advertisement()
    {
      return $this->belongsToMany('App\Models\Advertisement', 'advertisement_services'); // assuming user_id and task_id as fk
    }
}
