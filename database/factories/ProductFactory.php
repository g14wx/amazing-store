<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'price' => $this->faker->word,
        'description' => $this->faker->word,
        'img' => $this->faker->text,
        'category_id' => $this->faker->randomDigitNotNull
        ];
    }
}
