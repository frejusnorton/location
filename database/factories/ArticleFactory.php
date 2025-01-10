<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;
    public function definition(): array
    {
        return [
            "nom" => $this->faker->lastName,
            "numero_serie" => $this->faker->swiftBicNumber,
            "image_url" => $this->faker->imageUrl(),
            "disponiblite" =>rand(0,1),
            "type_article_id" =>rand(1,4),
        ];
    }
}
