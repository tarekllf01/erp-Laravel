<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use Sluggable;
    use HasFactory;

    protected $appends = ['price', 'total_price'];
    protected $fillable = [
        'name',
        'unit',
        'unit_price',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getPriceAttribute()
    {
        $unit = $this->unit;
        $unit_price = $this->unit_price;
        $price = $unit * $unit_price;
        return $price;
    }
    public function prices(): HasMany
    {
        return $this->hasMany(Price::class, 'product_id');
    }

    public function getTotalPriceAttribute()
    {
        $unit = DB::table('products')->avg('unit');
        $unit_price = DB::table('products')->avg('unit_price');
        $t_price = ($unit * $unit_price);
        $total_price = $t_price * DB::table('products')->count();
        return $total_price;
    }
}
