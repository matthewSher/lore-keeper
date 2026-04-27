<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',  
    ];

    // Тег может быть привязан ко многим статьям
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
