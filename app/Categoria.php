<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
    protected $fillable = ['name'];

    public function fotos(){
    	return $this->hasMany('App\Foto');
    }
}
