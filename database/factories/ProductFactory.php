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
            'name' => $this->faker->name,
            'category_id' => $this->faker->numberBetween(1, 10),
            'image_url' => $this->faker->imageUrl(),
            'description' => $this->faker->text(10, 20),
            'price' => $this->faker->numberBetween(1000000, 30000000),
            'sale_percent' => $this->faker->numberBetween(200000, 5000000),
            'stocks' => $this->faker->numberBetween(0, 1000),
            'is_active' => 1,
        ];
    }
}
