<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'type'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
