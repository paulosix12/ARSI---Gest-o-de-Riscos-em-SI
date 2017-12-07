<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = ['nome_empresa','razao_social','cidade','estado','cep','insc_municipal','insc_estadual','cnpj','nome_responsavel','telefone','email_respon'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'clientes';
}
