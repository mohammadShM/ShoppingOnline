<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $image
 */
class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

}
