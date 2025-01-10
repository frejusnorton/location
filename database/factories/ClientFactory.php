<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "sexe" => $this->faker->randomElement(['F', 'M']),
            "date_naissance" => $this->faker->dateTimeBetween("1990-01-01", "2005-01-01"),
            "lieu_naissance" => $this->faker->country . "" .  $this->faker->city,
            "nationnalite" => $this->faker->country,
            "pays" => $this->faker->country,
            "addresse" => $this->faker->address,
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "ville_id" => rand(1, 50),
            "piece_identites_id" =>  rand(1, 200),

        ];
    }
}
