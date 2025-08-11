<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'source_name',
        'price'
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}