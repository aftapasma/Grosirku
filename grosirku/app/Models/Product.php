<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'stock',
        'price',
        'category',
        'sold',
        'created_at',
        'updated_at'
    ];

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }

        if ($filters['category'] ?? false) {
        //     $query->where('category', 'like', '%' . request('category') . '%');
        // }
            $categories = explode(',', request('category'));
            $query->whereIn('category', $categories);
        }
    }
}
