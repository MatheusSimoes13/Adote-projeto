<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // public function ong(){

    //     return $this->belongsTo('App\Ong', 'ong_id');
    // }
    protected $fillable = ['name','ong_id','species','age'];

    

}
