<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cep' => $faker->cep,
            'address' => $faker->address,
            'number' => $faker->number,
            'complement' => $faker->complement,
            'neighborhood' => $faker->neighborhood,
            'city' => $faker->city,
            'state' => $faker->state,
        ];
    }
}
