<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProtocolo extends Model
{
    protected $table = 'protocolo';
    protected $fillable=['descricao', 'data', 'prazo', 'contribuinte'];

    public function relPessoa(){
        return $this->belongsTo('App\Models\ModelPessoa', 'contribuinte', 'id');
    }
}
