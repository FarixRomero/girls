<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Advertisement
 *
 * @property $id
 * @property $user_id
 * @property $telofono
 * @property $titulo
 * @property $texto
 * @property $nombre
 * @property $edad
 * @property $twitter
 * @property $is_independiente
 * @property $tarifa_hora
 * @property $horario
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Advertisement extends Model
{
    
    static $rules = [
		// 'user_id' => 'required',
		'telofono' => 'required',
		'titulo' => 'required',
		'texto' => 'required',
		'is_independiente' => 'required',
		'horario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','telofono','titulo','texto','nombre','edad','twitter','is_independiente','tarifa_hora','horario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function services()
    {
      return $this->belongsToMany('App\Models\Service', 'advertisement_services'); // assuming user_id and task_id as fk
    }
    public function atributos()
    {
      return $this->hasMany('App\Models\AtributosUsuario'); // assuming user_id and task_id as fk
    }

}
