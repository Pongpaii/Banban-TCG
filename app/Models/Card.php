<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_th', 
        'card_number',
        'rarity',
        'set_name',
        'description',
        'image_url',
        'slug',
        'average_price',
        'price_change',
    ];

    public function priceSources()
    {
        return $this->hasMany(PriceSource::class);
    }
}
