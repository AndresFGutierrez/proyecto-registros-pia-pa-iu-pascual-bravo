<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoAsignatura extends Model
{
    use HasFactory;

    protected $table = 'proyecto_asignaturas';
    public $incrementing = false;
    public $timestamps = true;
    protected $primaryKey = ['id_proyecto', 'id_asignatura', 'id_docente'];
    protected $fillable = ['id_proyecto', 'id_asignatura', 'grupo', 'id_docente'];
}
