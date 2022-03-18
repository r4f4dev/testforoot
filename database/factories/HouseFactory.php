<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'image' => $this->faker->imageUrl(),
            'type' => (rand(0, 1)) ? 'rent' : 'sale',
            'number_of_rooms' => $this->faker->numberBetween(1, 10),
            'number_of_bedrooms' => $this->faker->numberBetween(1, 10),
            'number_of_bathrooms' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->randomDigit(),
        ];
    }
}
