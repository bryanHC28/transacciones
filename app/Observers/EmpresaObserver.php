<?php

namespace App\Observers;

use App\Models\Empresa;
use App\Models\Formulario;

class EmpresaObserver
{
    /**
     * Handle the Empresa "created" event.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return void
     */
    public function created(Empresa $empresa)
    {
/*
        $form= new Formulario();
        $form->nombre_formulario='prueba observador';
        $form->status=1;
        $form->id_empresa=1;
        $form->save();

        */
    }

    /**
     * Handle the Empresa "updated" event.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return void
     */
    public function updated(Empresa $empresa)
    {
        //
    }

    /**
     * Handle the Empresa "deleted" event.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return void
     */
    public function deleted(Empresa $empresa)
    {
        //
    }

    /**
     * Handle the Empresa "restored" event.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return void
     */
    public function restored(Empresa $empresa)
    {
        //
    }

    /**
     * Handle the Empresa "force deleted" event.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return void
     */
    public function forceDeleted(Empresa $empresa)
    {
        //
    }
}
