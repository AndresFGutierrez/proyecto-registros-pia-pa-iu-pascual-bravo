<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    use HasFactory;

    protected $table = 'tipos_proyecto';
    protected $primaryKey = 'id_tipo';
    protected $fillable = ['nombre'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'id_tipo');
    }
}
