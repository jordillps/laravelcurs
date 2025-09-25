<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    
    protected $fillable = ['name'];


    // A category can have many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}   