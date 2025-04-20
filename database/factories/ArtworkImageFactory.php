<?php

namespace Database\Factories;
use App\Models\Artwork;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'art_work_id' => Artwork::factory(),
            'image_path' => 'https://picsum.photos/800/600?random='. $this->faker->unique()->numberBetween(1,1000),
            'is_primary' => true
        ];
    }
}