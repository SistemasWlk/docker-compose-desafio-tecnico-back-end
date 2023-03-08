<?php

namespace App\Http\Controllers;

use App\Repositories\CepRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CepController extends Controller
{
    protected $repository;

    public function __construct(CepRepository $cepRepository)
    {
        $this->repository = $cepRepository;
    }

    public function show($id)
    {
        return $this->repository->getCep($id);
    }
}
