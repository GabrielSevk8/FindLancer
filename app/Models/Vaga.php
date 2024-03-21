<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [
        'idvagas',
        'categoria',
        'titulo_vaga',
        'salario',
        'nome_empresa',
        'descricao',
    ];

    protected $table = "vagas";

}
