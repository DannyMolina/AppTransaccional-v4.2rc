@extends('layouts.app')

@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-sm-9">

                    <h1>Registro de Usuarios Tercero</h1>

                    <ol class="breadcrumb bc-3" >
                            <li>
                    <a href="{{URL::previous()}}"> <i class="fas fa-angle-left"></i> Regresar</a>
                </li>
                    <li class="active">
                                <strong>Registro de Usuarios Tercero</strong>
                        </li>
                        </ol>

                </div>
            </div>
        </div>
    </section>
<div class="container">
    <div class="row">
            <div class="col-md-5">
                <h2> REGISTRO DE USUARIOS</h2>
                <div class="form-row">
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to('GesUserTerCrear/guardar')}}"> {{ csrf_field() }}
  <div class="form-row">
    <div class="col">
    <label for="">Tipo de Identificaciòn:</label>
        <select name="ID_TIPO_INDENTIFICACION" id="ID_TIPO_INDENTIFICACION" class="form-control">
        <option value="">--Escoja Tipo de Identificacion--</option>
            @foreach($TipoIdents as $TipoIdent)
                <option value="{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}">{{$TipoIdent->NOMBRE_TIPO_INDENTIFICACION}}</option>
            @endforeach
        </select>
        <span class="text-danger">{{$errors->first("ID_TIPO_INDENTIFICACION")}}</span>
    </div>
    <div class="col">
    <label>Numero de Documento:</label>
    <input type="text" name="NUM_DOCUMENTO" class="form-control" placeholder="Numero de Documento">
    <span class="text-danger">{{$errors->first("NUM_DOCUMENTO")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Nombre Completo:</label>
    <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre Completo">
    <span class="text-danger">{{$errors->first("NOMBRE")}}</span>
    </div>
    <div class="col">
    <label>Direcciòn de Residencia:</label>
    <input type="text" name="DIRECCION" class="form-control" placeholder="Direcciòn">
    <span class="text-danger">{{$errors->first("DIRECCION")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono:</label>
    <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono">
    <span class="text-danger">{{$errors->first("TELEFONO")}}</span>
    </div>
    <div class="col">
    <label>Pais:</label>
    <input type="text" name="PAIS" class="form-control" placeholder="Pais" value="COLOMBIA">
    <span class="text-danger">{{$errors->first("PAIS")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Ciudad:</label>
    <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
    <span class="text-danger">{{$errors->first("CIUDAD")}}</span>
    </div>
    <div class="col">
    <label>Correo Electronico:</label>
    <input type="email" name="CORREO" class="form-control" placeholder="Correo Electronico">
    <span class="text-danger">{{$errors->first("CORREO")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Telefono Oficina:</label>
    <input type="phone" name="TELEFONO_OFICINA" class="form-control" placeholder="Telefono de Oficina">
    <span class="text-danger">{{$errors->first("TELEFONO_OFICINA")}}</span>
    </div>
    <div class="col">
    <label>Extenciòn:</label>
    <input type="phone" name="EXTENSION" class="form-control" placeholder="Extensiòn">
    <span class="text-danger">{{$errors->first("EXTENSION")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label>Usuario de Registro:</label>
    <input type="email" name="USUARIO" class="form-control" placeholder="Usuario de registro Correo">
    <span class="text-danger">{{$errors->first("USUARIO")}}</span>
    </div>
    <div class="col">
    <label for="inputEmail4">Password:</label>
    <input type="password" name="CONTRASENA" class="form-control" placeholder="Escribir Password">
    <span class="text-danger">{{$errors->first("CONTRASENA")}}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    <label for="">Cargo del Funcionario:</label>
        <select name="ID_CARGO" id="ID_CARGO" class="form-control">
        <option value="">--Escoja Tipo de Cargo--</option>
            @foreach($cargos as $cargo)
                <option value="{{$cargo->ID_CARGO}}">{{$cargo->NOMBRE_CARGO}}</option>
            @endforeach
        </select>
        <span class="text-danger">{{$errors->first("ID_CARGO")}}</span>
    </div>
    <div class="col">
    <label for="">Rol del Funcionario:</label>
        <select name="ID_ROL" id="ID_ROL" class="form-control">
        <option value="">--Escoja Tipo de Rol--</option>
            @foreach($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->name}}</option>
            @endforeach
        </select>
        <span class="text-danger">{{$errors->first("ID_ROL")}}</span>
    </div>
    <div class="col">
    <label for="">Empresa:</label>
        <select name="ID_EMPRESA_TERCERO" id="ID_EMPRESA_TERCERO" class="form-control">
            @foreach($empresa as $empresa)
                <option value="{{$empresa->ID_EMPRESA_TERCERO}}">{{$empresa->NOMBRE}}</option>
            @endforeach
        </select>

        <span class="text-danger">{{$errors->first("ID_EMPRESA_TERCERO")}}</span>
    </div>
    <div class="col">
    <label>Estado:</label>
    <select name="ESTADO"class="form-control">
    <option value="">--Escoja Estado--</option>
            <option value="ACTIVO">ACTIVO</option>
            <option value="DESACTIVADO">DESACTIVADO</option>
    </select>
    <span class="text-danger">{{$errors->first("ESTADO")}}</span>
  </div>
  </div>

  <div class="form-group">
    <label>Observaciones:</label>
    <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
  </div>

  <div class="form-row">
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('UsuariosTercero')}}">Regresar</a>
                    </div>
  </div>

</form>
</body>
</html>
@endsection
