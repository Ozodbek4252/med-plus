<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'city',
        'street',
        'apartment',
        'zip'
    ];
}
