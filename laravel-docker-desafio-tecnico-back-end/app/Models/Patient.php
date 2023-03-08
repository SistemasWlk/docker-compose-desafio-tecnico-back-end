<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';
    
    protected $fillable = ['address_id', 'name', 'image', 'cpf', 'cns', 'birth_date', 'mother', 'father'];

    /**
     * Get the patient that owns the address.
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
    }


}
