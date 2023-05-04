<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome da refeicao',
        'descricao',
        'horario',
        'caloria',
        'user_id'
    ];
}
