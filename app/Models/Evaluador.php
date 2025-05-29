<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluador extends Model
{
    use HasFactory;

    protected $table = 'evaluadores';
    protected $primaryKey = 'id_evaluador';
    protected $fillable = ['nombre', 'email'];
}
