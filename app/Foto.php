<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = "foto";
    protected $fillable = ['title', 'image', 'categoria_id'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }
}
