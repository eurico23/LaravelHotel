<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quartos>
 */
class QuartosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_do_quarto' => $this->faker->name(),
            'tags' => 'tags field',
            'tipo_de_quarto' => 'Solteiro, Casado, Lua de mel',
            'descricao_do_quarto' => $this->faker->paragraph(4),
            'preco_por_noite' => '85.000.00',
            'numero_quarto_disponiveis' => $this->faker->numberBetween(0, 20),
            'numero_pessoas_no_quarto' =>$this-> faker->randomDigitNotNull(),
            'numero_camas' =>$this-> faker->randomDigitNotNull(),
        ];
    }
}
