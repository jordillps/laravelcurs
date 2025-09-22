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
        'description',
        'price',
        'status',
        'category_id',
    ];

    //relacion muchos a uno
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}