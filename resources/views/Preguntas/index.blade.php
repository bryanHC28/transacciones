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
                            <h3 class="text-center">Dashboard Content</h3>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
          Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Ocurrio un error!',

})
    </script>




@stop
