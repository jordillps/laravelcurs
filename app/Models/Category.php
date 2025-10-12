<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'company_id'];


    // A category can have many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //A belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}   