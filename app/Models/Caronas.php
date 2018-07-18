<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caronas extends Model
{
	protected $table = 'caronas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome','fumante','reputacao','carro','vagas','origem','destino','valor'];

    static public function relacoes()
    {
        return []; 
    }

    static public function relacoesModel()
    {
        return [];
    }

}
