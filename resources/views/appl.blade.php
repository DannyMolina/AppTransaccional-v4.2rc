@extends('layouts.app')

@section('content')
<title>Big Data E-Commerce</title>
<a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MI PERFIL</a>

                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">ZONA TRANSACCIONAL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('home')}}">HOME</a>
                   <br>
                   <br>
<div class="container">
    <div class="row">
        <div class="">
            <div class="card">
                <div class="card-header"><center><b>ZONA TRANSACCIONAL</b></center></div>
                </div>
<div class="row">
  <div class="col-sm-4">
  <br>
    <br>
    <div class="card">
    <br>
    <center><img src="{{ asset('Imagenes/Usuarios2.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('UsuariosTercero')}}">Gestión Usuarios Externos</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Usuarios.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('UsuariosInterno')}}">Gestión Usuarios Internos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Clientes.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Clientes')}}">Gestión Clientes</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Rol.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Roles')}}">Gestión Rol</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Cargo.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Cargos')}}">Gestión de Cargos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/SectorEmpresa.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Sector')}}">Gestión de Sector Empresa</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/BigData.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('instahunters')}}">Gestión BigData</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/MedioPago.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('MedioPagos')}}">Modo de Pago</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Categorias.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Categorias')}}">Categorias</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Servicio.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Servicios')}}">Servicio</a></center>
      </div>
      </div>
    </div>


  <div class="col-sm-4">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Facturas.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('/Factura')}}">Factura</a></center>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
