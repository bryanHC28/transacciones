<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $table = 'respuesta';
protected $fillable=['respjson','status'];

public function formulario()
{
return $this->belongsTo('App\Models\Pregunta','id_pregunta','id');
}


}
