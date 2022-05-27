<?php

namespace App\Models;

use App\Casts\Settings\LogoCast;
use App\Traits\ActionBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, ActionBy, InteractsWithMedia;

    protected $casts = [
        'logo' => LogoCast::class
    ];

    protected $fillable = [
        'title',
        'phone',
        'email',
        'address',
        'meta_keywords',
        'meta_description',
        'google_site_verification',
    ];

    public function updated_user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('settings')->singleFile();
    }
}
