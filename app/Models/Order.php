<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $price
 */
class Order extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function details(): HasMany
    {
        return $this->hasMany(OrderDetails::class);
    }

}
