<?php

namespace App\Models;

use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;

class Home extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = ['type', 'title', 'body', 'is_published', 'user_id', 'page_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function page(): HasOne
    {
        return $this->hasOne(Page::class, 'id', 'page_id');
    }
}
