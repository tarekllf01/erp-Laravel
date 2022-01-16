<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
    use HasFactory;

    protected $appends =['price'];
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
            $price = $unit*$unit_price ;
            return $price;

    }

}
