@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion Usuarios Tercero</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion Usuarios Tercero</strong>
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
                   <tr><th class="text-center">NOMBRE</th>
                       <th class="text-center">TIPO DE DOCUMENTO</th>
                       <th class="text-center">NUMERO DOCUMENTO</th>
                       <th class="text-center">DIRECCION</th>
                       <th class="text-center">TELEFONO</th>
                       <th class="text-center">EXTENSION</th>
                       <th class="text-center">USUARIO</th>
                       <th class="text-center">EMPRESA</th>
                       <th class="text-center">ACCIONES</th>
                   </tr>

                   @foreach($empleados as $users1)
                   <tr><td>{{ $users1->NOMBRE}}</td>
                       <td>{{ $users1->TIPO_DOCUMENTO}}</td>
                       <td>{{ $users1->NUM_DOCUMENTO}}</td>
                       <td>{{ $users1->DIRECCION }}</td>
                       <td>{{ $users1->TELEFONO}}</td>
                       <td>{{ $users1->EXTENSION}}</td>
                       <td>{{ $users1->USUARIO}}</td>
                       <td>{{ $empresa->NOMBRE}}</td>

                       <td>
                           <a a href="GesUserTerEdit/updateUser/{{$users1->ID_EMPLEADO_TERCERO}}" class="btn btn-secondary">EDITAR</a>
                       </td>
                       </tr>
                   @endforeach

</table>
                <a class="btn btn-primary" href="{{URL::to('GesUserTerCrear/agregar')}}">Agregar</a>
</div>
@endsection
