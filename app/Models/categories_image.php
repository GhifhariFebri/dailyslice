<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class categories_image extends Model
{
    use HasFactory;
    protected $fillable = [
        "category_images_name",
        "category_images_img",
    ];

    public function imagescategories():BelongsTo{
        return $this->belongsTo(categories::class);
    }
}
