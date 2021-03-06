@extends('layouts.app')

@section('content')

   <!-- Breadcrumb -->
   <section class="breadcrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-9">

                <h1>Gestión Cargos</h1>

                <ol class="breadcrumb bc-3" >
                        <li>
                <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
            </li>
                <li class="active">
                            <strong>Gestión Cargos</strong>
                    </li>
                    </ol>

            </div>

        </div>

    </div>
</section>
<br>
<BR>
<div class="container">
   <table class="table table-striped text-center">
                   <tr><th class="text-center">ID</th>
                       <th class="text-center">NOMBRE CARGO</th>
                       <th class="text-center">DESCRIPCIÓN</th>
                   </tr>
                   @foreach($cargo as $users1)
                   <tr><td>{{ $users1->ID_CARGO}}</td>
                       <td>{{ $users1->NOMBRE_CARGO}}</td>
                       <td>{{ $users1->DESCRIPCION}}</td>
                       </tr>
                   @endforeach

</table>
{!! $cargo->render() !!}
                <a class="btn btn-primary" href="{{URL::to('CargoCrear/agregar')}}">Agregar</a>
</div>
@endsection
