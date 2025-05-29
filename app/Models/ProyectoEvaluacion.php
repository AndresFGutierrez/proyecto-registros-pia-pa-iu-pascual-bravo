<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoEvaluacion extends Model
{
    use HasFactory;

    protected $table = 'proyecto_evaluaciones';
    public $incrementing = false;
    public $timestamps = true;
    protected $primaryKey = ['id_proyecto', 'id_evaluacion', 'id_evaluador'];
    protected $fillable = ['id_proyecto', 'id_evaluacion', 'id_evaluador', 'resultado'];
}
