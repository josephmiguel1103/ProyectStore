<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    
    public function sizes(){
        return $this->hasMany(Product::class);
    }
}
