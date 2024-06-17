<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartos extends Model
{
    use HasFactory;

    // specify the table name
    protected $table = 'quartos';

    protected $fillable = ['nome_do_quarto', 'tags', 'tipo_de_quarto', 'descricao_do_quarto', 'preco_por_noite', 'numero_quarto_disponiveis', 'numero_pessoas_no_quarto', 'numero_camas'];

}
