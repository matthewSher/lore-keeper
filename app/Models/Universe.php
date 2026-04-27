<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Universe extends Model
{
    protected $fillable = [
        'owner_id',
        'name',
        'slug',
        'description',
        'status',
        'moderation_comment',
    ];

    // Вселенная пренадлежит одному человеку
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    // Во вселенной много статей
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    // У вселенной может быть много соавторов
    public function coauthors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'universe_coauthors', 'universe_id', 'user_id');
    }
}
