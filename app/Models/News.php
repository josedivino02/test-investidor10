<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "subtitle",
        "slug",
        "content",
        "category_id",
        "date_published",
        "status",
    ];

    public function category(): BelongsTo
    {
    return $this->belongsTo(Category::class);
    }
}