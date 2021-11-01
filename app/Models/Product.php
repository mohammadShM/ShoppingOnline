<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @property mixed $image
 * @property mixed $id
 */
class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

}
