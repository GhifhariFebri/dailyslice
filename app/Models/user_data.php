<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class user_data extends Model
{
    use HasFactory;

    protected $fillable = [
        "full_name", 
        "phone_number", 
        "full_address"
    ];

    public function order_data(): HasMany
    {
        return $this->hasMany(order_data::class);
    }

}
