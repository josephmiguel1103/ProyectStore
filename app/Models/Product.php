<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded=['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
    public function scopeCategoria($query,$category_id){
        if($category_id && $category_id != 'selecione una opcion'){
            return $query->where('category_id',$category_id);
        }else {
            return $query;
        }
    }
=======
>>>>>>> 6703aa93b237a65c6d14633c5f9c33d5d4cf6140
}
