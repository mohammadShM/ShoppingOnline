<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $title
 */
class PropertyGroup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

}
