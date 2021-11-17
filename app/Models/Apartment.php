<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'building_id'];


    public function building(){
        return $this->belongsTo(Building::class);
    }
}
