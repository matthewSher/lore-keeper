<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    // С одной ролью может быть много пользователей
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
