<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;


protected $table = 'pregunta';
protected $fillable=['status','pregjson','id_formulario'];

public function formulario()
{
return $this->belongsTo('App\Models\Formulario','id_formulario','id');
}
}
