<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 *
 * @property $id
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class File extends Model
{
    
    static $rules = [
		'url' => 'required',
    
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url','user_id','tipo'];


    public function user(){
      return $this->belongsTo('App\User');

  }
}
