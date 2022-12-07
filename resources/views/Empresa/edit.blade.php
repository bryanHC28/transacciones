









@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center"></h3>





                            <div class="container">
                                <div  class="text-center wow fadeInDown">


                                <h1 style="color: black;">Editar Empresa</h1>
                                </div>

                                <div class="col-sm-5 col-sm-offset-1">
                                {!! Form::open(['method'=>'PATCH','url'=>'/empresa/'.$empresa->id,'style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}


                                <div class="form-group">

                                {!! Form::label ('nombre_empresa','Nombre :')!!}
                                {!! Form::text ('nombre_empresa',$empresa->nombre_empresa,['placeholder'=>'Ingresa nombre','class'=>'form-control'])!!}

                                </div>



                                <div class="form-group">


                                {!! Form::label ('status','Estatus:')!!}
                                {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),$empresa->status,['placeholder'=>'Seleccionar','class'=>'form-control'])!!}
                                </div>
                                <br>

                                {!! Form::submit('Guardar ',['class'=>'btn btn-primary btn-lg'])!!}
                                {!! Form::close() !!}
                                <br>

                                 </div>

                                </div>













                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection









