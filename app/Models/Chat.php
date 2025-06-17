<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $celular
 * @property $edad
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Mensaje[] $mensajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chat extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellidos', 'celular', 'edad', 'direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mensajes()
    {
        return $this->hasMany(\App\Models\Mensaje::class, 'id', 'chat_id');
    }
    
}
