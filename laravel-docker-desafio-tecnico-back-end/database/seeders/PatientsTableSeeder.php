<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Address;


class PatientsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Address = Address::create([
            'cep' => '76550-000',
            'address' => 'Rua 01',
            'number' => '01',
            'complement' => 'QD 01 LT 01',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias'
        ]);

        Patient::create([
            'address_id' => $Address->id,
            'name' => 'patient_01',
            'image' => 'patients/patient_01',
            'cpf' => '23282514042',
            'cns' => '238190590200002',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_01',
            'father' => 'father_01',
        ]);
        Patient::create([
            'address_id' => $Address->id,
            'name' => 'patient_01',
            'image' => 'patients/patient_02',
            'cpf' => '88254712034',
            'cns' => '115381190860009',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_02',
            'father' => 'father_02',
        ]);
        Patient::create([
            'address_id' => $Address->id,
            'name' => 'patient_03',
            'image' => 'patients/patient_03',
            'cpf' => '71595925066',
            'cns' => '171873824470002',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_03',
            'father' => 'father_03',
        ]);
        Patient::create([
            'address_id' => $Address->id,
            'name' => 'patient_04',
            'image' => 'patients/patient_04',
            'cpf' => '01226343066',
            'cns' => '241767785320008',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_04',
            'father' => 'father_04',
        ]);
        Patient::create([
            'address_id' => $Address->id,
            'name' => 'patient_05',
            'image' => 'patients/patient_05',
            'cpf' => '97320676087',
            'cns' => '987492205470018',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_05',
            'father' => 'father_05',
        ]);
    }
}
