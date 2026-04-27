<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
    ];

    // В одной категории может быть много статей
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
