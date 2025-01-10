<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PieceIdentite>
 */
class PieceIdentiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "piece_identite" => $this->faker->randomElement(['CNI', 'PERMIS DE CONDUIRE', 'PASSEPORT']),
            "numero_piece_identite" => $this->faker->unique()->regexify('[A-Z0-9]{8,12}'),
        ];
    }
}
