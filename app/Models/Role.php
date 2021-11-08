<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @property mixed $id
 */
class Role extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    // for seleckted checkbox in edit in roles for show permissions in roles
    public function hasPermission($permission): bool
    {
        return $this->permissions()->where('id', $permission->id)->exists();
    }

    public static function findByTitle($title)
    {
        return self::query()->whereTitle('normal-user', $title)->firstOrFail();
    }

}
