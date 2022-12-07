@extends('layouts.app')


@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Empresas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


                            <style>
                                .modal-header {
                                    background: #000000;
                                    color: #fff;
                                }

                                .required:after {
                                    content: "*";
                                    color: red;
                                }

                                .contenedor{
                                display: flex;
                                justify-content:center;
                                padding: 5px;

                                height: 75%;


                                }
                                .espacio{
                              width: 10px;


                                }
                            </style>



                            <br>
                            <br>
                            <br>
                        <div class="container">
                        <div  class="text-center wow fadeInDown">
                            <h1 style="color: black;"></h1>

                        <br>
                        <br>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Nueva Empresa</button>

                        <br>
                        <br>
                        <br>
                        <br>
                        <table id="tabla" class="table table-bordered table-hover table-dark"style="width:100%">
                            <thead align="center"  >
                            <tr style="color: rgb(255, 255, 255);">
                                            <th style="color: rgb(255, 255, 255);">ID</th>
                                            <th style="color: rgb(255, 255, 255);">NOMBRE </th>

                                <th style="color: rgb(255, 255, 255);">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($empresa as $empresas)
                        <tr align="center" class="table table-hover table-dark" style="color: black;">



                                        <td>{!! $empresas->id !!}</td>
                                        <td>{!! $empresas->nombre_empresa !!}</td>



                        <td>


<div class="contenedor">

                            <p><div class="espacio"></div></p>
                            <a class="btn btn-success" href="{!! asset('empresa/'.$empresas->id.'/edit') !!}">Eeditar</a>
                            <p><div class="espacio"></div></p>
                            {!! Form::open(['method' =>'DELETE','url'=>'/empresa/'.$empresas->id])!!}
                            {!!Form::submit('Eliminar',['class'=>'btn btn-danger '])!!}
                            {!! Form::close() !!}

                        </div>

                        </td>

                        </tr>


                        @endforeach

                        </tbody>



                        </table>


                        @section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"> </script>

<script >

$(document).ready(function () {
    $('#tabla').DataTable();
});

</script>

                        @endsection
                        <br/>


                             </div>
                                 </div>












                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">

        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo formulario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">



                        {!! Form::open(['url'=>'/empresa','style'=>'color:black;','id'=>'main-contact-form','class'=>'contact-form','name'=>'contact-form'])!!}
                            <div class="mb-3">


                                {!! Form::label ('','Ingrese nombre de la empresa:')!!}
                                {!! Form::text ('',null,['placeholder'=>'Ingresa nombre ','class'=>'form-control' ,'required','onkeyup'=>'validaciones();'])!!}
                            </div>


                            <div class="mb-3">

                                {!! Form::label ('status','Estatus:')!!}
                                {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Seleccionar','class'=>'form-control','required','onkeyup'=>'validaciones();'])!!}
                            </div>

                    </div>
                    <div class="modal-footer">
                        {!! Form::submit('Guardar ',['class'=>'btn btn-success'])!!}
                        {!! Form::close() !!}

                        <button data-bs-dismiss="modal" type="submit" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
