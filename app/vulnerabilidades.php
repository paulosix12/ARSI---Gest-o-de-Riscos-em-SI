<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vulnerabilidades extends Model
{
        protected $fillable = ['id','nome','fonte','descricao'];
        protected $guarded = ['id', 'created_at', 'update_at'];
        protected $table = 'vulnerabilidades';
}
