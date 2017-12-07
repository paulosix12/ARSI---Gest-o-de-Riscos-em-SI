<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class controles extends Model
{
    protected $fillable = ['nome','tipo','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'controles';
}
