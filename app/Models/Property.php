<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function propertyGroup(): BelongsTo
    {
        return $this->belongsTo(PropertyGroup::class);
    }

}
