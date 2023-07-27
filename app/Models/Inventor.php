<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Inventor extends Model
{
    use HasFactory;

    protected $fillable = [
//        'objetoPI_id',
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
        'link_lattes',
//      'email',
//      'telefone',
//      'celular',
    ];

    public function endereco() : HasOne
    {
        return $this->hasOne(Endereco::class, 'inventor_id', 'id');
    }

    public function objetosPI()
    {
        return $this->belongsTo(ObjetoPI::class, 'objetoPI_id');
    }
}
