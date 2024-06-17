<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;

    // specify the table name
  //  protected $table = 'reservas';

    protected $fillable = [
        'quarto_id', 
        'nome', 
        'email', 
        'data_entrada', 
        'data_saida'
    ];

}
