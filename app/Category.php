<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $fillable = ['id', 'category_name'];
    public function product(){

        return $this -> hasMany(Product::class);

    }
}
