<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\companyinfo>
 */
class CompanyinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'about_us'=>$this->faker->text,
            'location'=>$this->faker->country(),
            'telephone'=>$this->faker->phoneNumber,
            'website'=>$this->faker->sentence

        ];
    }
}
