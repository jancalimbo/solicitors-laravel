<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitorsListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'address'=>$this->faker->address,
            'amount'=>$this->faker->randomDigit(),
            'message'=>$this->faker->text(100),
        ];
    }
}
