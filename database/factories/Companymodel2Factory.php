<?php

namespace Database\Factories;

use App\Models\companyinfo;
use App\Models\job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\companymodel2>
 */
class Companymodel2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'evaluation'=>$this->faker->numberBetween(0,10)

        ];
    }
}
