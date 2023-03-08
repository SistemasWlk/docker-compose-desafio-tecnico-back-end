<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'cep' => '76550-000',
            'address' => 'Rua 01',
            'number' => '01',
            'complement' => 'QD 01 LT 01',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias'
        ]);
    }
}
