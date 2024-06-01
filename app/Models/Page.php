<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'content', 'is_published', 'user_id', 'meta', 'is_menu', 'parent_id', 'menu_text'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subPage()
    {
    }
}
