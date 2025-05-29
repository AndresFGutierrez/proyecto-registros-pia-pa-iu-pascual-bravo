<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';
    protected $fillable = ['nombre', 'email', 'id_programa'];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }
}
