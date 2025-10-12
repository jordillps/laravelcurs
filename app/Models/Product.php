<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    //fiillable
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'status',
        'category_id',
        'is_active',
        'company_id'
    ];

    //relacion muchos a uno
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // A product can have many tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    //A belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}