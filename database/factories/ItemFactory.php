<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            //
            return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->numberBetween(1, 2), // Assuming categories with IDs 1 and 2 exist
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'description' => $this->faker->text(),
            //'image' => $this->faker->imageUrl(),
            'image' => fake()->randomElement([
                'https://images.unsplash.com/photo-1652752731860-ef0cf518f13a',
                'https://images.unsplash.com/photo-1638866281450-3933540af86a',
                'https://plus.unsplash.com/premium_photo-1674062989120-4ccc0eb35be0',
            ]),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
