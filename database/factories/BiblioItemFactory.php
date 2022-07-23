<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BiblioItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'biblionumber' => rand(1,7)
        ];
    }
}
