<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\Pregunta;
use App\Models\Empresa;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::select('id', 'nombre_empresa')->where('status', '=', 1)->get();

        return view('Empresa.index')->with('empresa', $empresa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Empresa.create');   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $datos = $request->all();
            Empresa::create($datos);    //errrroooooooooooooorrrr no esta declarado el name en el form- entra al catch

            DB::commit();
            return redirect('empresa');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect('preguntas');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('Empresa.edit')->with('empresa', $empresa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        DB::beginTransaction();
        try {



            $datos = $request->all();
            $empresa = Empresa::find($id);
            $empresa->update($datos);

            DB::commit();
            return redirect('empresa');


        } catch (\Exception $e) {
            DB::rollback();
            return redirect('preguntas');
        }





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {





        DB::beginTransaction();
        try {

        $empresa = Empresa::find($id);
        $empresa->statuse = 0;  //eeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrooooorrrr  no existe campo statuse entra en el catch
        $empresa->save();

        DB::commit();
        return redirect('empresa');


    } catch (\Exception $e) {
        DB::rollback();
        return redirect('preguntas');

    }








    }
}
