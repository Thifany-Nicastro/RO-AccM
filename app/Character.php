<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['id', 'user_id', 'uuid', 'nome', 'raca', 'sexo', 'cabelo', 'classe', 'cor', 'level', 'conjuge', 'filho'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
