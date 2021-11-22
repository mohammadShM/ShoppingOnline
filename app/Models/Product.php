<?php /** @noinspection UnknownInspectionInspection */

namespace App\Models;

use App\Http\Requests\AdminRequest\ProductDiscountCreateRequest;
use App\Http\Requests\AdminRequest\ProductGalleryRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static find(mixed $get)
 * @property mixed $image
 * @property mixed $id
 * @property mixed $category
 * @property mixed $price
 * @property mixed $discount_value
 * @property mixed $has_discount
 */
class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    // for use method in response for use jquery and js
    protected $appends = [
        'price_with_discount',
        'image_path',
    ];

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

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class)->withPivot(['value'])->withTimestamps();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // how set name table ? because like not model class and relation many to many for user and product model
    // and not set name user and product model for table and name table is likes
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
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
        if (!$this->has_discount) {
            return $this->price;
        }
        // for set price with discount
        return $this->price - $this->price * $this->discount_value / 100;
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

    /** @noinspection NullPointerExceptionInspection */
    public function getRouteKeyName(): string
    {
        // for all admin panel pages
        if (request()->route()->getPrefix() === '/adminPanel') {
            return 'slug';
        }
        // for home page
        if (request()->routeIs('client.index')) {
            return 'slug';
        }

        // for wishlist page
        if (request()->routeIs('client.likes.wishlist.index')) {
            return 'slug';
        }
        // در روت ها پارامتر ست شده را بررسی می کند و اگر روتی product به عنوان پارامتر ست شده باشد آن روت را
        // در متغیر ما می ریزد مثل productDetails/{product}
        // که prouduct همان پارامتر پروداکت هست که ست شده
        $identifier = Route::current()->parameters()['product'];
        // بررسی می کند اگر پارامتر پروداکت ما به صورت عددی نبود یعنی مثل روت نمایش محصولات به صورت slug بود پس عدد نیست
        // پس خروجی کلید ما اسلاگ است در غیر این صورت مثل روت like که در پارامتر پروداکت ما Id محصول را ارسال می کنیم
        // پس کلید ما آی دی است
        if (!ctype_digit($identifier)) {
            return 'slug';
        }
        return 'id';
    }

    // for liked product And use Eloquent: Mutators & Casting in nlade use ==== is_liked

    /** @noinspection PhpUnused */
    public function getIsLikedAttribute(): bool
    {
        return $this->likes()->where('user_id', auth()->id())->exists();
    }

    // for set image in jquery cart  =====================================================

    public function getImagePathAttribute()
    {
        // return asset(str_replace('public', '/storage', $this->image));
        return str_replace('public', '/storage', $this->image);
    }

}
