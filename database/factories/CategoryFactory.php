<?php 
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory {
    public function definition(): array
    {
        static $categories = ['Paintings', 'Sculpture', 'Photography', 'Digital Art'];
        static $index = 0;
        if($index >= count($categories))
        {
            $index = 0;
        }
        $name = $categories[$index++];
        return [
            'name' => $name,
        ];
    }
}