<?php

namespace App;

use App\Models\Complaint;
use App\Models\Contribution;
use App\Models\Expense;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Redis;
use TCG\Voyager\Facades\Voyager;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends \TCG\Voyager\Models\User implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable
        = [
            'name',
            'email',
            'password',
            'first_name',
            'last_name',
            'phone_no',
            'linkedin',
            'instagram',
            'facebook',
            'twitter',
            'avatar',
            'about'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden
        = [
            'password',
            'remember_token',
        ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts
        = [
            'email_verified_at' => 'datetime',
        ];

    public function getAvatarAttribute($value)
    {
        return Voyager::image($value);
    }

    public function getContributionsAttribute()
    {
        if ($contributions = Redis::get('dashboard.contributions')) {
            return $contributions;
        }

        $contributions = Contribution::sum('amount') / 100;

        Redis::setex('dashboard.contributions', 60 * 60 * 24, $contributions);

        return $contributions;
    }

    public function getExpensesAttribute()
    {
        if ($expenses = Redis::get('dashboard.expenses')) {
            return $expenses;
        }

        $expenses = $expenses = Expense::sum('amount') / 100;

        Redis::setex('dashboard.expenses', 60 * 60 * 24, $expenses);

        return $expenses;
    }

    public function getFullNameAttribute()
    {
        return "$this->first_name $this->last_name";
    }

    public function getPendingAttribute()
    {
        if ($pending = Redis::get('dashboard.pending')) {
            return $pending;
        }

        $pending = Complaint::where('status', 'pending')->count();

        Redis::setex('dashboard.pending', 60 * 60 * 24, $pending);

        return $pending;
    }

    public function getResolvedAttribute()
    {
        if ($resolved = Redis::get('dashboard.resolved')) {
            return $resolved;
        }

        $resolved = Complaint::where('status', 'resolved')->count();

        Redis::setex('dashboard.resolved', 60 * 60 * 24, $resolved);

        return $resolved;
    }

    public function getIsAdminAttribute()
    {
        return !$this->hasRole('user');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function setAvatarAttribute($value)
    {
        $avatar = $this->attributes['avatar'];
        Voyager::image($avatar) === $value ?
            $this->attributes['avatar'] = $avatar
            : $this->attributes['avatar'] = str_ireplace('/storage/','',$value);
    }
}
