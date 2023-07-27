<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'campus',
        'produto',
    ];

    public function objetoPI()
    {
        return $this->belongsTo(ObjetoPI::class,'objetoPI_id');
    }
}
