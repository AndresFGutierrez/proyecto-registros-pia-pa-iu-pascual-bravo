<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';
    protected $primaryKey = 'id_docente';
    protected $fillable = ['nombre', 'email'];

    public function proyectoAsignaturas()
    {
        return $this->hasMany(ProyectoAsignatura::class, 'id_docente');
    }
}
