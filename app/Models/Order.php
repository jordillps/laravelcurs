<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'product_id',
        'company_id',
        'total_amount',
        'status',
        'order_date',
        'notes',
        'billing_address',
        'shipping_address',

    ];

    protected $casts = [
        'order_date' => 'datetime',
        'billing_address' => 'array',
        'shipping_address' => 'array',
        'total_amount' => 'decimal:2',
    ];

    // Relación con User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relación con Product
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    //A belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}