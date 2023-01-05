<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
         "gallery_img"
    ];

    public function gallerycategories():BelongsTo{
        return $this->belongsTo(categories::class);
    }
}
