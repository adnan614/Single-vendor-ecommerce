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
            'category_id' => rand(1, 5),
            'brand_id' => rand(1, 5),
            'name' => $this->faker->name,
            'quantity' => 10,
            'color' => $this->faker->colorName,
            'price' => $this->faker->randomNumber(2),
            'product_slug' => $this->faker->name,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
