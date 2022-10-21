<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_product',
        'image',
        'description_product',
        'price_production',
        'category_product',
       
    ];

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }
}
