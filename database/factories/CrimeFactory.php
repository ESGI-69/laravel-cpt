<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Weapon;
use App\Models\City;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crime>
 */
class CrimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'weapon_id' => Weapon::factory(),
            'city_id' => City::factory(),
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'victim' => $this->faker->name(),
        ];
    }
}
