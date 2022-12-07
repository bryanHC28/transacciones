<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $table = 'formulario';
protected $fillable=['nombre_formulario','status','id_empresa'];

public function empresa()
{
return $this->belongsTo('App\Models\Empresa','id_empresa','id');
}
}
