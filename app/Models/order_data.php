<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order_data extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "nomor_telp", "alamat_pengiriman","categories_id"
    ];

    public function order():BelongsTo{
        return $this->belongsTo(categories::class);
    }
}
