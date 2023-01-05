<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_name",
        "category_img",
        "category_desc",
        "category_price"
    ];

    public function order_data(): HasMany
    {
        return $this->hasMany(order_data::class);
    }

    public function category_img(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
