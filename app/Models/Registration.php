<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table='registratons';
    protected $fillable=[
        'name',
        'fname',
        'password',
    ];
    public function setNameAttribute($value){
        $this->attributes['name']= ucwords($value);
    }
}
