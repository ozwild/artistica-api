<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','email', 'password',
    ];

    protected $appends = [
        'manages_accounts'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getManagesAccountsAttribute() : bool
    {
        return $this->accounts()->count() > 0;
    }

    public function scopeSearch(Builder $query, string $search) : Builder
    {
        $pattern = "%{$search}%";
        return $query->where('name', 'ilike', $pattern)
        ->orWhere('email', 'ilike', $pattern);
    }

    public function scopeOnlyManagers(Builder $query) : Builder
    {
        return $query->has('accounts');
    }

    public function scopeWithScores(Builder $query)
    {
        return $query->with('scores');
    }

    public function accounts() : BelongsToMany
    {
        return $this->belongsToMany('App\Account', 'account_managers')
            ->using('App\AccountManager')
            ->withTimestamps();
    }

    public function scores() : HasMany
    {
        return $this->hasMany('App\Score', 'reviewer_id');
    }
    
    public function about() : MorphOne
    {
        return $this->morphOne('App\About', 'aboutable');
    }
}
