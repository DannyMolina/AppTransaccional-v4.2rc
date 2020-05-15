<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadosTercero extends Model
{
    protected $table="empleado_tercero";
    protected $primaryKey="ID_EMPLEADO_TERCERO";
    public $incrementing = true;
    public $timestamps = false;

    public function EmpresaTercero()
{

    return $this->belongsTo('App\EmpresaTercero');
}

}
