<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'cpf' => preg_replace('/\.|-|\//i', '', $this->cpf),
            'cns' => preg_replace('/\.|-|\//i', '', $this->cns),
            'birth_date' => $this->birth_date,
            'mother' => $this->mother,
            'father' => $this->father,
            'address' => new AddressResource($this->address),
        ];
    }
}
