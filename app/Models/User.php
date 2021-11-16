<?php

namespace App\Models;

use App\Mail\OtpMail;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static paginate(int $int)
 * @property mixed $id
 * @property mixed $password
 * @property mixed $role
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // for send email =========================================

    /**
     * @throws Exception
     */
    public static function genarateOtp(Request $request): Model|Builder|User
    {
        $otp = random_int(11_111, 99_999);
        $userQuery = self::query()->where('email', $request->get('email'))->first();
        if (isset($userQuery) && !empty($userQuery) && $userQuery->exists()) {
            $user = $userQuery;
            $user->update([
                'password' => bcrypt($otp),
            ]);
        } else {
            $user = self::query()->create([
                'email' => $request->get('email'),
                'password' => bcrypt($otp),
                'role_id' => Role::findByTitle('normal-user')->id,
            ]);
        }
        // send otp email to user =========================================
        Mail::to($user->email)->send(new OtpMail($otp));
        return $user;
    }

}
