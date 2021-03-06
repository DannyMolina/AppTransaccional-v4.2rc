@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Gestion de Roles y Perfiles</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::to('appl')}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Gestion de Roles y Perfiles</strong>
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
                       <th class="text-center">NOMBRE DEL ROL</th>
                       <th class="text-center">DESCRIPCION</th>
                       <th class="text-center">DEPENDENCIA</th>
                   </tr>
                   @foreach($roles as $users1)
                   <tr><td>{{ $users1->id}}</td>
                       <td>{{ $users1->name}}</td>
                       <td>{{ $users1->description}}</td>
                       <td>{{ $users1->dependency}}</td>
                       </tr>
                   @endforeach

</table>
{!! $roles->render() !!}
                <a class="btn btn-primary" href="{{URL::to('RolCrear/agregar')}}">Agregar</a>
</div>
@endsection
