<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'unit' => $this->faker->randomNumber(1,10),
            'unit_price' =>  $this->faker->randomNumber(1,20),
        ];
    }
}
