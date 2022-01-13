<?php

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ong extends Model
{
    use HasFactory;

    protected $primaryKey = 'ong_id';

    public function pets(){

        return $this->hasMany('App\Models\Pet','ong_id','ong_id');
        

    }

    public function formulario(){

        return $this->hasOne('App\Models\Formulario');

    }
}
