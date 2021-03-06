@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion Medios de Pago</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion Medios de Pago</strong>
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
                       <th class="text-center">MEDIO DE PAGO</th>
                   </tr>
                   @foreach($MedioPagos as $users1)
                   <tr><td>{{ $users1->ID_PAGO}}</td>
                       <td>{{ $users1->METODO_PAGO}}</td>
                       </tr>
                   @endforeach

</table>
{!! $MedioPagos->render() !!}
                <a class="btn btn-outline-secondary" href="{{URL::to('MedioPagoCrear/agregar')}}">Agregar</a>
</div>
@endsection
