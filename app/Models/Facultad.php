<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    protected $table = 'facultades';
    protected $primaryKey = 'id_facultad';
    protected $fillable = ['nombre', 'id_institucion'];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'id_institucion');
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'id_facultad');
    }
}
