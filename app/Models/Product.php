<?php /** @noinspection UnknownInspectionInspection */

namespace App\Models;

use App\Http\Requests\AdminRequest\ProductDiscountCreateRequest;
use App\Http\Requests\AdminRequest\ProductGalleryRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class);
    }

    /** @noinspection PhpUnhandledExceptionInspection
     * @noinspection NullPointerExceptionInspection
     */
    public function addGallery(ProductGalleryRequest $request): void
    {
        $pathName = "ProductsGallery_" . time() . "_" . random_int(111111, 999999) . "_"
            . $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('public/productGallery', $pathName);
        $this->galleries()->create([
            'product_id' => $this->id,
            'path' => $path,
            'mime' => $request->file('file')->getClientMimeType(),
        ]);
    }

    // for delete picture in gallery in galery database ==================================
    public function deleteGallery(Gallery $gallery): void
    {
        if (Storage::exists($gallery->path)) {
            Storage::delete($gallery->path);
        }
        $gallery->delete();
    }

    // for add discount for product ==================================
    public function addDiscount(ProductDiscountCreateRequest $request): void
    {
        if (!$this->discount()->exists()) {
            $this->discount()->create([
                'product_id' => $this->id,
                'value' => $request->get('value'),
            ]);
        } else {
            $this->discount->update([
                'product_id' => $this->id,
                'value' => $request->get('value'),
            ]);
        }
    }

    // for delete discount for product ==================================
    public function deleteDiscount(Discount $discount): void
    {
        $discount->delete();
    }

    // for update discount for product ==================================
    public function updateDiscount(ProductDiscountCreateRequest $request): void
    {
        $this->discount->update([
            'product_id' => $this->id,
            'value' => $request->get('value'),
        ]);
    }

    /* // set by normal method ==================================
    // for check how set discount for product ==================================
    public function priceWithDiscount()
    {
        if (!$this->discount()->exists()) {
            return $this->price;
        }
        // for set price with discount
        return $this->price - $this->price * $this->discount->value / 100 ;
    } */

    // use in blade by casting = $product->price_with_discount ==================================
    // set by Eloquent: Mutators & Casting ==================================
    // for check how set discount for product ==================================
    /** @noinspection PhpUnused */
    public function getPriceWithDiscountAttribute()
    {
        if (!$this->discount()->exists()) {
            return $this->price;
        }
        // for set price with discount
        return $this->price - $this->price * $this->discount->value / 100;
    }

    // use in blade by casting = $product->has_discount ==================================
    // set mutators methoad for cheack has discount ==================================
    /** @noinspection PhpUnused */
    public function getHasDiscountAttribute(): bool
    {
        return $this->discount()->exists();
    }

    // use in blade by casting = $product->discount_value ==================================
    // set mutators methoad for get value column in discount model ==================================
    /** @noinspection PhpUnused */
    public function getDiscountValueAttribute()
    {
        if ($this->has_discount) {
            return $this->discount->value;
        }
        return null;
    }

    // for slug in domain alternatives id ==================================
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

}
