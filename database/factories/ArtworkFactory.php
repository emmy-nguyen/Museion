<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artwork>
 */
class ArtworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'user_id' => User::factory()->create(),
            'category_id' => function() {
                if(Category::count() === 0) {
                    $categories = ['Paintings', 'Sculpture', 'Photography', 'Digital Art'];
                    foreach($categories as $category) {
                        Category::create(['name' => $category]);
                    }
                }
                return Category::inRandomOrder()->first()->id;
            },
            'medium' => $this->faker->randomElement(['Oil on canvas', 'Acrylic', 'Watercolor', 'Digital', 'Mixed media']),
            'price' => $this->faker->randomFloat(2, 50, 5000),
            'dimensions' => $this->faker->randomElement(['24in x 36in', '12in x 16in', '8in x 10in']),
            'year_created' => $this->faker->numberBetween(1800, 2025),
            'is_available' => $this->faker->boolean(80),
        ];
    }
}
