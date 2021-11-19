<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static first()
 * @property mixed $category
 */
class FeaturedCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    // for table not id and auto incremment
    public $incrementing = false;

    // for table not id and auto incremment
    protected $primaryKey = 'category_id';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public static function getCategory()
    {
        return self::query()->first()->category ?? null;
    }

}
