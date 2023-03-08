<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['cep', 'address', 'number', 'complement', 'neighborhood', 'city', 'state'];

    /**
     * Get the address that owns the patient.
     */
    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

}
