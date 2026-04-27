<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable = [
        'universe_id',
        'category_id',
        'author_id',
        'parent_id',
        'title',
        'slug',
        'content',
        'status',
        'moderation_comment',
    ];

    // Статья принадлежит одной вселенной
    public function universe(): BelongsTo
    {
        return $this->belongsTo(Universe::class);
    }

    // Статья принадлежит одному автору
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Статья принадлежит одной категории
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // К статье прикреплено много медиа-данных
    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }

    // У статьи много тегов
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    // У статьи много оценок
    public function feedback(): HasMany
    {
        return $this->hasMany(ArticleFeedback::class);
    }

    // Связь для системы ревизий (Статья-родитель)
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'parent_id');
    }

    // Связь для системы ревизий (Дочерние черновики/правки)
    public function revisions(): HasMany
    {
        return $this->hasMany(Article::class, 'parent_id');
    }
}
