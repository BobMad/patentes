<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Inventor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'identidade',
        'cpf',
        'qualificacao',
//      'endereco',
        'instituicao',
        'vinculo_ifap',
        'matricula_ifap',
        'curso_ifap',
        'periodo',
        'campus_ifap',
        'centro_ifap',
        'departamento',
//      'email',
//      'telefone',
//      'celular',
        'link_lattes',
    ];

    public function endereco() : HasOne
    {
        return $this->hasOne(Endereco::class, 'inventor_id', 'id');
    }
}
