<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatasEvento extends Model
{
    use HasFactory;

    protected $fillable = [
        'concepcao',
        'croquis_desenhos',
        'primeira_descricao',
        'modelo_operacao',
        'primeira_publicacao',
        'primeira_apresentacao',
    ];
}
