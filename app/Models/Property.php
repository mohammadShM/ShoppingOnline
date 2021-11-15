<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function propertyGroup(): BelongsTo
    {
        return $this->belongsTo(PropertyGroup::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot(['value'])->withTimestamps();
    }

    // for get value in properties ==========================

    /** @noinspection PhpUnused
     * @noinspection UnknownInspectionInspection
     */
    public function getValueForProduct($product)
    {
        $productPropertyQuery = $this->products()->where('product_id', $product->id);
        if (!$productPropertyQuery->exists()) {
            return null;
        }
        return $productPropertyQuery->first()->pivot->value;
    }

}
