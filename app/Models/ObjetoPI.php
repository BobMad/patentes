<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class ObjetoPI extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'palavras_chave',
        'campo_invencao',
        'detalhe_invento',
        'diario_laboratorio',
    ];

    public function representante(): HasOne
    {
        return $this->hasOne(Representante::class, 'objetoPI_id', 'id');
    }

    public function inventores(): HasOne
    {
        return $this->hasOne(Inventor::class, 'objetoPI_id', 'id');
    }

    public function titulares(): HasOne
    {
        return $this->hasOne(Titular::class, 'objetoPI_id', 'id');
    }

    public function infoInvento()
    {
        return $this->hasOne(InformacaoInvento::class, 'objetoPI_id', 'id');
    }

    public function antecedentes()
    {
        return $this->hasOne(AntecedentesInvencao::class, 'objetoPI_id', 'id');
    }

    public function datas()
    {
        return $this->hasOne(DatasEvento::class, 'objetoPI_id', 'id');
    }

    public function anterioridades()
    {
        return $this->hasOne(AnterioridadeReferencias::class, 'objetoPI_id', 'id');
    }

    public function investimentos()
    {
        return $this->hasOne(InvestimentoPesquisa::class, 'objetoPI_id', 'id');
    }

    public function transferencias()
    {
        return $this->hasOne(TransferenciaTecnologia::class, 'objetoPI_id', 'id');
    }

    /**
     * @return HasOneThrough
     */
    public function enderecoTitular(): HasOneThrough
    {
        return $this->hasOneThrough(
            Endereco::class,
            Titular::class,
            'objetoPI_id', // Foreign key on the cars table...
            'titular_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }

    public function enderecoInventor(): HasOneThrough
    {
        return $this->hasOneThrough(
            Endereco::class,
            Inventor::class,
            'objetoPI_id', // Foreign key on the cars table...
            'inventor_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }
}

