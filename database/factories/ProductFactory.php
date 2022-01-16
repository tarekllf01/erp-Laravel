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
        $unit = $this->faker->randomNumber(1,10);
        $unit_price = $this->faker->randomNumber(1,20);
        $name = $this->faker->name();
        return [
            'name' => $name,
            'unit' => $unit,
            'unit_price' =>  $unit_price,
            'slug' =>$name,
        ];
    }
}
