<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelPessoa extends Model
{
    protected $table = 'pessoa';

    public function relProtocolo(){
        return $this->hasMany('App\Models\ModelProtocolo', 'contribuinte', 'id');
    } 
}
