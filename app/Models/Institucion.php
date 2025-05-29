<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';
    protected $primaryKey = 'id_institucion';
    protected $fillable = ['nombre'];

    public function facultades()
    {
        return $this->hasMany(Facultad::class, 'id_institucion');
    }
}
