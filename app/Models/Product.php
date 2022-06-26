<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }   
    public function ProductDetails(){
        return $this->hasOne(productDetails::class,'products_id');
    }      
}
