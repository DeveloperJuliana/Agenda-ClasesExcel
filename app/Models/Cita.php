<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //use HasFactory;

    protected $table="citas";
    protected $primaryKey="id";
    protected $fillabel=['cedula', 'nom_dueño','apell_dueño','nom_mascota','fecha_cita','hora_cita'];

    public $timestamps = false;
}
