<?php

namespace App\Models;

use App\Casts\Partner\ImageCast;
use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy, CascadeSoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name', // 255
        'url', // 1000
        'created_by',
    ];

    protected $casts = [
        'image' => ImageCast::class,
    ];

    protected array $cascadeDeletes = ['media'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('partners')->singleFile();
    }
}
