<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'product_code' => $this->faker->unique()->regexify('[0-9]{3}'),
            'product_name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber(2),
            'quantity' => $this->faker->randomNumber(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
