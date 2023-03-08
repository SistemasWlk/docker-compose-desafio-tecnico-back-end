<?php

namespace App\Http\Controllers;


use App\Http\Resources\AddressResource;
use App\Repositories\AddressRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddressStoreRequest;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    protected $repository;

    public function __construct(AddressRepository $AddressRepository)
    {
        $this->repository = $AddressRepository;
    }

    public function index()
    {
        return AddressResource::collection($this->repository->getAllAddress());
    }

    public function show($id)
    {
        return $this->repository->getAddress($id);
    }

    public function store(AddressStoreRequest $request)
    {
        return new AddressResource($this->repository->createNewAddress($request->validated()));
    } 

    public function update(Request $request, $id)
    {
        return $this->repository->updateAddress($request->all(), $id);
    } 

    public function destroy($id)
    {
        return $this->repository->destroyAddress($id);
    } 

}
