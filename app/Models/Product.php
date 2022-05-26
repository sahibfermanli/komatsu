<?php

namespace App\Models;

use App\Casts\Product\ImageCast;
use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy, InteractsWithMedia, CascadeSoftDeletes;

    protected $casts = [
        'image' => ImageCast::class
    ];

    protected array $cascadeDeletes = ['media'];

    protected $fillable = [
        'category_id',
        'name_az',
        'name_en',
        'name_ru',
        'model',
        'capacity',
        'front',
        'travel_speed',
        'lifting_speed',
        'outside_turning_radius',
        'operating_weight',
        'engine_power',
        'created_by',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(static function ($model) {
            $model->slug = Str::slug($model->name_en) . '-' . time();
        });

        static::updating(static function ($model) {
            $model->slug = Str::slug($model->name_en) . '-' . time();
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('products')->singleFile();
    }
}
