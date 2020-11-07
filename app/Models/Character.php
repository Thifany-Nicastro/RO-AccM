<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'job', 'race', 'gender'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
