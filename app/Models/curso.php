<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;
    
    //protected $fallible = ['name', 'descripcion', 'categoria'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
