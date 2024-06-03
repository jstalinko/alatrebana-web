<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1,10),
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => rand(300000,5000000),
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'active' => true
        
        ];
    }
}
