<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
        'is_blocked',
        'verification_code',
    ];

    protected $hidden = [
        'password',
        'verification_code',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'is_blocked' => 'boolean',
            'password' => 'hashed',
        ];
    }

    // Пользователь создал много вселенных
    public function universes(): HasMany
    {
        return $this->hasMany(Universe::class, 'owner_id');
    }

    // Пользователь выступает соавтором во многих вселенных
    public function coauthoredUniverses(): BelongsToMany
    {
        return $this->belongsToMany(Universe::class, 'universe_coauthors', 'user_id', 'universe_id');
    }

    // Пользователь написал много статей
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    // Пользователь имеет одну роль
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
