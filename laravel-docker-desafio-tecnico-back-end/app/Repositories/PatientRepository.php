<?php

namespace App\Repositories;

//use App\Repositories\Traits\RepositoryTrait;
use App\Models\Patient;

class PatientRepository
{

    //use RepositoryTrait;

    protected $entity;

    public function __construct(Patient $model)
    {
        $this->entity = $model;
    }

    public function getAllPatient()
    {
        return $this->entity
            ->with('Address')
            ->get();
    }

    public function getPatient(string $identify)
    {
        $patient = $this->entity
                ->with('Address')
                ->find($identify);

        if ($patient === null) {
            return response()->json(['status' => 'fail', 'msm' => 'Not Fault', 'data' => []], 400);
        } else {
            return response()->json(['status' => 'sucess', 'msm' => '', 'data' => array($patient)], 200);
        }
    }

    public function createNewPatient(array $data)
    {
        return $this->entity
                ->create([
                    'address_id' => $data['address_id'],
                    'name' => $data['name'],
                    'image' => $data['image'],
                    'cpf' => $data['cpf'],
                    'cns' => $data['cns'],
                    'birth_date' => $data['birth_date'],
                    'mother' => $data['mother'],
                    'father' => $data['father'],
                ]);
    }

    public function updatePatient(array $data, string $identify)
    {

        $patient = $this->entity->find($identify);

        if ($patient === null) {
            return response()->json(['status' => 'fail', 'msm' => 'Not Fault', 'data' => []], 400);
        } else {
            foreach ($data as $key => $value) {
                $patient->$key = $value;
            }

            return $patient->save() ? 
                response()->json(['status' => 'sucess', 'msm' => '', 'data' => array($this->entity->findOrFail($identify))], 200) : 
                response()->json(['status' => 'sucess', 'msm' => 'Não foi possível salvar os registros', 'data' => []], 500);
        }

    }

    public function destroyPatient(string $identify)
    {
        $patient = $this->entity->find($identify);

        if ($patient === null) {
            return response()->json(['status' =>'error', 'msm' => 'Not Found', 'data' => []], 404);
        } else {
            $deletePatient = $patient->delete();
            return $deletePatient ? 
                response()->json(['status' => 'sucess', 'msm' => 'Registro deletado com sucesso', 'data' => []], 200) : 
                response()->json(['status' => 'fail', 'msm' => 'Falha ao deletar registro', 'data' => []], 500) ;
        }

    }

}