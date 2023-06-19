<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntecedentesInvencao extends Model
{
    use HasFactory;

    protected $fillable = [
        'diferencial',
        'diferencial_patentes',
    ];
}
