<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluaciones';
    protected $primaryKey = 'id_evaluacion';
    protected $fillable = ['fecha', 'observaciones'];
}
 