<?php

namespace Database\Factories;

use App\Models\Partient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partient>
 */
class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Partient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $faker->name,
            'image' => $faker->image,
            'cpf' => $faker->unique()->cpf,
            'cns' => $faker->unique()->cns,
            'birth_date' => $faker->birth_date,
            'mother' => $faker->mother,
            'father' => $faker->father,
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

