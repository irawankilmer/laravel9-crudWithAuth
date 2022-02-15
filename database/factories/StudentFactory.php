<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nisn'      => $this->faker->unique()->randomNumber(8, true),
            'nis'       => $this->faker->unique()->randomNumber(5, true),
            'fullName'  => $this->faker->name(),
            'gender'    => 1,
            'phone'     => $this->faker->phoneNumber(),
            'address'   => $this->faker->streetAddress(),
            'avatar'    => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
