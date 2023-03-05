<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;


class PatientsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'name' => 'patient_01',
            'image' => 'patients/patient_01',
            'cpf' => '23282514042',
            'cns' => '238190590200002',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_01',
            'father' => 'father_01',
            'cep' => '76550000',
            'address' => 'Rua 01',
            'number' => '01',
            'complement' => 'QD 01 LT 01',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias'
        ]);
        Patient::create([
            'name' => 'patient_01',
            'image' => 'patients/patient_02',
            'cpf' => '88254712034',
            'cns' => '115381190860009',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_02',
            'father' => 'father_02',
            'cep' => '76550000',
            'address' => 'Rua 02',
            'number' => '02',
            'complement' => 'QD 01 LT 02',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias',
        ]);
        Patient::create([
            'name' => 'patient_03',
            'image' => 'patients/patient_03',
            'cpf' => '71595925066',
            'cns' => '171873824470002',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_03',
            'father' => 'father_03',
            'cep' => '76550000',
            'address' => 'Rua 03',
            'number' => '03',
            'complement' => 'QD 01 LT 03',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias',
        ]);
        Patient::create([
            'name' => 'patient_04',
            'image' => 'patients/patient_04',
            'cpf' => '01226343066',
            'cns' => '241767785320008',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_04',
            'father' => 'father_04',
            'cep' => '76550000',
            'address' => 'Rua 04',
            'number' => '04',
            'complement' => 'QD 01 LT 04',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias',
        ]);
        Patient::create([
            'name' => 'patient_05',
            'image' => 'patients/patient_05',
            'cpf' => '97320676087',
            'cns' => '987492205470018',
            'birth_date' => '1988-09-09',
            'mother' => 'mother_05',
            'father' => 'father_05',
            'cep' => '76550000',
            'address' => 'Rua 05',
            'number' => '05',
            'complement' => 'QD 01 LT 05',
            'neighborhood' => 'Centro',
            'city' => 'Porangatu',
            'state' => 'Goias',
        ]);
    }
}
