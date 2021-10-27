<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $array)
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function parent()
    {
        // return $this->belongsTo(Category::class,'parent_id');
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

}
