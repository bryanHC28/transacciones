
@extends('template.master')
@section('contenido_central')
<br />
<br />
<br>
    <br>
    <br>
<h3>ID: {!! $animals->id !!}</h3>

         <h3>Nombre  {!! $animals->nombre !!}</h3>
                <h3>Especie: {!! $animals->especie!!}</h3>
                <h3>Origen: {!! $animals->origen !!}</h3>
                <h3>Json: {!! $animals->prbjson !!}</h3>
                <h3>Status: {!! $animals->status !!}</h3>

		<br />
		<br />
		<br />
		<br />


<a href="{!! asset('animals') !!}" class="btn btn-secondary w-130">Regresar</a>
<br />
<br />


@endsection()
