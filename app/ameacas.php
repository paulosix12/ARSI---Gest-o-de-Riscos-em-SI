<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ameacas extends Model
{
    protected $fillable = ['nome','tipo','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'ameacas';
}
