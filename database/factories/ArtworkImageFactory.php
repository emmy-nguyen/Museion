<?php

namespace Database\Factories;
use App\Models\ArtWork;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkImageFactory extends WP_Widget_Factory
{
    public function definition(): array
    {
        return [
            'art_work_id' => Artwork::factory(),
            'image_path' => '/public/images/placeholder.png',
            'is_primary' => true
        ];
    }
}