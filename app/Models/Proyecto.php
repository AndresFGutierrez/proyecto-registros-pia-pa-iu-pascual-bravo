<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';
    protected $primaryKey = 'id_proyecto';
    protected $fillable = ['titulo', 'descripcion', 'id_tipo'];

    public function tipoProyecto()
    {
        return $this->belongsTo(TipoProyecto::class, 'id_tipo');
    }

    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'proyecto_asignaturas', 'id_proyecto', 'id_asignatura')
            ->withPivot('grupo', 'id_docente')
            ->withTimestamps();
    }

    public function evaluaciones()
    {
        return $this->belongsToMany(Evaluacion::class, 'proyecto_evaluaciones', 'id_proyecto', 'id_evaluacion')
            ->withPivot('id_evaluador', 'resultado')
            ->withTimestamps();
    }
}
