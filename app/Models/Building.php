<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ciudad', 'direccion'];

    public function apartement(){
        return $this->hasMany(Apartment::class);
    }
}
