
 <style>


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
@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection
<br>
<br>
<br>
<br>



<table iid="tabla" class="table table-bordered table-hover table-dark" style="width:100%">
    <thead>
    <tr style="color: black;">
                    <th style="color: rgb(255, 255, 255);">ID</th>
                    <th style="color: rgb(255, 255, 255);">PREGUNTA </th>
                    <th style="color: rgb(255, 255, 255);">TIPO DE PREGUNTA</th>
                    <th style="color: rgb(255, 255, 255);">CONTENIDO</th>
                    <th style="color: rgb(255, 255, 255);">STATUS</th>
        <th style="color: rgb(255, 255, 255);">ACCIONES</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pregunta as $preguntas)
<tr class="table table-hover table-dark" style="color: black;">



                <td>{!! $preguntas->id !!}</td>
                <td>{!! $preguntas->nombre_pregunta !!}</td>
                <td>{!! $preguntas->tipo_pregunta !!}</td>
                <td>{!! $preguntas->contenido !!}</td>
                <td>{!! $preguntas->status !!}</td>

<td>




<div class="contenedor">

    <p><div class="espacio"></div></p>


    <a data-bs-toggle="modal2" data-bs-target="#myModal2" data-bs-toggle=""  class="btn btn-success" href="{!! asset('preguntas/'.$preguntas->id.'/edit') !!}">EDITAR</a>
    <p><div class="espacio"></div></p>
    {!! Form::open(['method' =>'DELETE','url'=>'/preguntas/'.$preguntas->id])!!}
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
