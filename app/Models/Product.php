<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function categories(): BelongsToMany
    {
        // return $this->belongsToMany(Category::class)->withPivot('added_at');
        return $this->belongsToMany(Category::class)
            ->withTimestamps()
            ->withPivot('visible')
            ->wherePivot('visible', true);
    }
}
