<?php

namespace App\Repositories;

//use App\Repositories\Traits\RepositoryTrait;

class CepRepository
{

    private $cep;

    public function getCep($id)
    {
        $this->cep = $id;

        return \Cache::rememberForever($id, function () {
            $ch = curl_init();

            curl_setopt_array($ch, array(
                CURLOPT_URL => "https://viacep.com.br/ws/".$this->cep."/json/",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "GET",
            ));

            $response = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);

            return $response;
        });
    }

}