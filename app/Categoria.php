<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table="categoria";
    protected $primaryKey="ID_CATEGORIA";
    public $incrementing = true;
    public $timestamps = false;
}
