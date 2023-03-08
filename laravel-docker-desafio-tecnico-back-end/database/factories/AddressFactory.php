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
            'cep' => '76550-000',
            'address' => Str::random(),
            'number' => Str::random(),
            'complement' => Str::random(),
            'neighborhood' => Str::random(),
            'city' => Str::random(),
            'state' => Str::random()
        ];
    }
}
