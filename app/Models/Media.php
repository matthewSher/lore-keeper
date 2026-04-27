<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'article_id',
        'file_path',
        'type',  
    ];

    // Медиа файл всегда принадлежит только одной статье
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
