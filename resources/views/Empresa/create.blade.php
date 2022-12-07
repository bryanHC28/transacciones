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


                            <br>
                            <br>
                            <br>
                            <div class="container">
                            <div  class="text-center wow fadeInDown">
                            <h1 style="color: black;">NUEVA EMPRESA</h1>
                             </div>

                            <div class="col-sm-5 col-sm-offset-1">
                            {!! Form::open(['url'=>'/empresa','style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}

                              <div class="form-group">

                              <div class="form-group">

                            {!! Form::label ('nombre_empresa','Nombre empresa:')!!}
                            {!! Form::text ('nombre_empresa',null,['placeholder'=>'Ingresa nombre ','class'=>'form-control' ,'required','onkeyup'=>'validaciones();'])!!}

                            </div>

                              <div class="form-group">

                            {!! Form::label ('status','Estatus:')!!}
                            {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Seleccionar','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
                            </div>
                            <br>
                            <br>

                            {!! Form::submit('Guardar ',['class'=>'btn btn-primary btn-lg'])!!}
                            {!! Form::close() !!}

                             <a class="btn btn-primary btn-lg" href="{!! asset('empresa')!!}">REGRESAR</a>
                             </div>
                             </div>


                             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

