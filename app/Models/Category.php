<?php /** @noinspection PhpMissingReturnTypeInspection */

/** @noinspection ReturnTypeCanBeDeclaredInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method create(array $array)
 * @method static where(string $string, string $string1, $null)
 * @method static paginate(int $int)
 * @property mixed $id
 * @property mixed $title_fa
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
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /** @noinspection PhpUnused
     */
    public function getAllSubCategoryProducts()
    {
        // get id category
        $parentIds = $this->id;
        // get all id in subCategories in parent category
        $childrenIds = $this->children()->pluck('id');
        // get product by parent category and sub category
        return Product::query()->whereIn('category_id', $childrenIds)
            ->orWhere('category_id', $parentIds)
            ->paginate(16);
    }

    public function propertyGroups()
    {
        return $this->belongsToMany(PropertyGroup::class);
    }

    /** @noinspection PhpUnused
     * @noinspection UnknownInspectionInspection
     */
    public function hasPropertyGroup($propertyGroup)
    {
        return $this->propertyGroups()->where('property_group_id', $propertyGroup->id)->exists();
    }

}
