<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'memo',
        'price',
        'is_selling',
    ];

    public function items()
    {
        return $this->belongsToMany(Purchase::class)
        ->withPivot('quantity');
    }
}
