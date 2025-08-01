<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';
    protected $primaryKey = 'id_asignatura';
    protected $fillable = ['nombre', 'id_programa'];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_asignaturas', 'id_asignatura', 'id_proyecto')
            ->withPivot('grupo', 'id_docente')
            ->withTimestamps();
    }
}
