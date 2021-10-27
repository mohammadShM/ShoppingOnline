<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $array)
 * @method static where(string $string, string $string1, $null)
 * @method static paginate(int $int)
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

    public function children()
    {
        // return $this->hasMany(Category::class,'parent_id');
        return $this->hasMany(__CLASS__,'parent_id');
    }

}
