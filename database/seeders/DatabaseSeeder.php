<?php

namespace Database\Seeders;

use App\Models\Quartos;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Quartos::factory(6)->create();

       /* Quartos::create([
        'nome_do_quarto' => 'Lounge',
        'tags' => 'tags field',
        'tipo_de_quarto' => 'company field',
        'descricao_do_quarto' => 'Some quick example text to build on the card title and make up the bulk of the card content',
        'preco_por_noite' => '85.000.00',
        'numero_quarto_disponiveis' => '10',
        'numero_pessoas_no_quarto'=> '2',
        'numero_camas' => '1',

       ]);
       Quartos::create([
        'nome_do_quarto' => 'Big room',
        'tags' => 'tags field',
        'tipo_de_quarto' => 'company field',
        'descricao_do_quarto' => 'Some quick example text to build on the card title and make up the bulk of the card content',
        'preco_por_noite' => '85.000.00',
        'numero_quarto_disponiveis' => '10',
        'numero_pessoas_no_quarto'=> '2',
        'numero_camas' => '1',

       ]);

       Quartos::create([
        'nome_do_quarto' => 'Small room',
        'tags' => 'tags field',
        'tipo_de_quarto' => 'company field',
        'descricao_do_quarto' => 'Some quick example text to build on the card title and make up the bulk of the card content',
        'preco_por_noite' => '85.000.00',
        'numero_quarto_disponiveis' => '10',
        'numero_pessoas_no_quarto'=> '2',
        'numero_camas' => '1',

       ]); */
    }
}
