<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\Pregunta;
use App\Models\Empresa;

class AjaxController extends Controller
{

   // public static $pregunta= null;

    public function combo_formulario($id_empresa){

        $formularios=Formulario::
        select('id','nombre_formulario')
        ->where('id_empresa',$id_empresa)
        ->where('status',1)
        ->get();



        return $formularios;

        }

        public function llenar_tabla($id_formulario){

            $pregunta=Pregunta::where('id_formulario',$id_formulario)->where('status',1) ->get();



            return view ('Tabla')->with('pregunta',$pregunta);




            }

                public function for($id_formulario){

           $pregunta=Pregunta::where('id_formulario',$id_formulario)->where('status',1) ->get();
           $pregunta=Pregunta::where('id_formulario',$id_formulario)->where('status',1) ->get();

                    return view ('Formulario')->with('pregunta', $pregunta)->with('id_formulario', $id_formulario);

                    }



                    public function llenar_tabla_empresa($id_empresa){

                        $empresa= Formulario::where('id_empresa',$id_empresa)->where('status',1) ->get();



                        return view ('Tabla_formularios')->with('empresa',$empresa);

                                  }


                    public function llenar_tabla_contestar($id_empresa){

                        $empresa= Formulario::where('id_empresa',$id_empresa)->where('status',1) ->get();



                        return view ('TablaContestar')->with('empresa',$empresa);

                                  }


}
