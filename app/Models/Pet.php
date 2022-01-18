<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $directory = "/images/";

    use HasFactory;

    // public function ong($value){
        
    //     return $this->belongsTo('App\Ong', 'ong_id');
    // }
    protected $fillable = ['name','ong_id','species','age','path'];

    

    public function getPathAttribute($value){
        
        return $this->directory . $value;
    }

    public function ong(){

        return $this->belongsTo('App\Models\Ong');
    }

}
