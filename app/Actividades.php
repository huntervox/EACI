<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{


    protected $fillable = [
        'name','horario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_actividad', 'id_actividad', 'id_user');
    }
}

