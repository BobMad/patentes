<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferenciaTecnologia extends Model
{
    use HasFactory;

    protected $fillable = [
        'potencial_comercializacao',
        'interesses',

    ];
}
