<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name', 'company_id'];

    // A tag can belong to many products
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    //A tag belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
