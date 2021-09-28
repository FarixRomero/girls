<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AtributosUsuario
 *
 * @property $id
 * @property $advertisement_id
 * @property $key
 * @property $titulo
 *
 * @property Advertisement $advertisement
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AtributosUsuario extends Model
{
    protected $table = "atributos_usuario";
    static $rules = [
		'advertisement_id' => 'required',
		'key' => 'required',
		'value' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['advertisement_id','key','value','value_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function advertisement()
    {
        return $this->hasOne('App\Models\Advertisement', 'id', 'advertisement_id');
    }
    

}
