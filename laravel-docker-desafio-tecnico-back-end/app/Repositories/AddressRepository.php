<?php

namespace App\Repositories;

//use App\Repositories\Traits\RepositoryTrait;
use App\Models\Address;

class AddressRepository
{

    //use RepositoryTrait;

    protected $entity;

    public function __construct(Address $model)
    {
        $this->entity = $model;
    }

    public function getAllAddress()
    {
        return $this->entity->get();
    }

    public function getAddress(string $identify)
    {
        $address = $this->entity->find($identify);

        if ($address === null) {
            return response()->json(['status' => 'fail', 'msm' => 'Not Fault', 'data' => ''], 400);
        } else {
            return response()->json(['status' => 'sucess', 'msm' => '', 'data' => array($address)], 200);
        }
    }

    public function createNewAddress(array $data)
    {
        return $this->entity
                ->create([
                    'cep' => $data['cep'],
                    'address' => $data['address'],
                    'number' => $data['number'],
                    'complement' => $data['complement'],
                    'neighborhood' => $data['neighborhood'],
                    'city' => $data['city'],
                    'state' => $data['state'],
                ]);
    }

    public function updateAddress(array $data, string $identify)
    {

        $address = $this->entity->find($identify);

        if ($address === null) {
            return response()->json(['status' => 'fail', 'msm' => 'Not Fault', 'data' => []], 400);
        } else {
            foreach ($data as $key => $value) {
                $address->$key = $value;
            }

            return $address->save() ? 
                response()->json(['status' => 'sucess', 'msm' => '', 'data' => array($this->entity->findOrFail($identify))], 200) : 
                response()->json(['status' => 'sucess', 'msm' => 'Não foi possível salvar os registros', 'data' => []], 500);
        }

    }

    public function destroyAddress(string $identify)
    {
        $address = $this->entity
            ->with('Patient')
            ->find($identify);

        if ($address === null) {
            return response()->json(['status' =>'error', 'msm' => 'Not Found', 'data' => []], 404);
        } elseif ($address->Patient !== null) {
            return response()->json(['status' => 'error', 'msm' => 'Endereço vinculado com parciente', 'data' => []], 500);
        } else {
            $deleteAddress = $address->delete();
            return $deleteAddress ? 
                response()->json(['status' => 'sucess', 'msm' => 'Registro deletado com sucesso', 'data' => []], 200) : 
                response()->json(['status' => 'fail', 'msm' => 'Falha ao deletar registro', 'data' => []], 500) ;
        }

    }

}