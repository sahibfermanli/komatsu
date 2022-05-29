<?php

namespace App\Models;

use App\Casts\Slider\DescriptionCast;
use App\Casts\Slider\ImageCast;
use App\Casts\Slider\IsActiveCast;
use App\Casts\Slider\TitleCast;
use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy, CascadeSoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title_az',
        'title_en',
        'title_ru',
        'description_az',
        'description_en',
        'description_ru',
        'is_active', // boolen
        'created_by',
    ];

    protected $casts = [
        'is_active_text' => IsActiveCast::class,
        'title' => TitleCast::class,
        'description' => DescriptionCast::class,
        'image' => ImageCast::class,
    ];

    protected array $cascadeDeletes = ['media'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('categories')->singleFile();
    }
}
