<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function shops() {
        //Shop::classはApp/Models/Shopと同じ意味
        return $this->hasMany(Shop::class);
        
    }
}
