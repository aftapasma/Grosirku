<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'quantity',
        'total_price',
        'status',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'user_id');
    }
    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->whereHas('user', function ($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            });
        }
    }
}
