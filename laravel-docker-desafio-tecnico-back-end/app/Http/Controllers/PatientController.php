<?php

namespace App\Http\Controllers;

use App\Http\Resources\PatientResource;
use App\Repositories\PatientRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientStoreRequest;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected $repository;

    public function __construct(PatientRepository $patientRepository)
    {
        $this->repository = $patientRepository;
    }

    public function index()
    {
        return PatientResource::collection($this->repository->getAllPatient());
    }

    public function show($id)
    {
        return $this->repository->getPatient($id);
    }

    public function store(PatientStoreRequest $request)
    {
        return new PatientResource($this->repository->createNewPatient($request->validated()));
    } 

    public function update(Request $request, $id)
    {
        return $this->repository->updatePatient($request->all(), $id);
    } 

    public function destroy($id)
    {
        return $this->repository->destroyPatient($id);
    } 

}
