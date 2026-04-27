<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleFeedback extends Model
{
    const UPDATED_AT = null;

    protected $table = 'article_feedback';

    protected $fillable = [
        'article_id',
        'user_id',
        'rating',
        'comment',  
    ];

    // Отзыв оставляется конкретной статье
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    // Отзыв оставляет конкретный пользователь
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
