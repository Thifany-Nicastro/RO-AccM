<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = 'personagens';

    protected $fillable = ['id', 'user_id', 'uuid', 'nome', 'raca', 'sexo', 'cabelo', 'classe', 'cor', 'level', 'conjuge', 'filho'];
}
