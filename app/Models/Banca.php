<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
    protected $fillable = [
        'nome',
        'titulacao',
        'tcc_id',
        'avaliador_1',
        'avaliador_2',
        'avaliador_3',
    ];

    public function tcc()
    {
        return $this->belongsTo(Tcc::class);
    }
}
