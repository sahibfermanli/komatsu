<?php

namespace App\Models;

use App\Casts\Brochure\ImageCast;
use App\Casts\Brochure\FileCast;
use App\Casts\Brochure\TitleCast;
use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brochure extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy, CascadeSoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'title_az',
        'title_en',
        'title_ru',
        'created_by',
    ];

    protected $casts = [
        'title' => TitleCast::class,
        'image' => ImageCast::class,
        'file' => FileCast::class,
    ];

    protected array $cascadeDeletes = ['media'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('brochures')->singleFile();
        $this->addMediaCollection('brochures_file')->singleFile();
    }
}
