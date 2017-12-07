<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ativos extends Model
{
    protected $fillable = ['clientes','nome','custo','localização','importancia','probabilidade','impacto'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'ativos';
}
