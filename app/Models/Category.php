<?php

namespace App\Models;

use App\Casts\Category\DescriptionCast;
use App\Casts\Category\ImageCast;
use App\Casts\Category\NameCast;
use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy, CascadeSoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'parent_id',
        'name_az',
        'name_en',
        'name_ru',
        'description_az',
        'description_en',
        'description_ru',
        'created_by',
    ];

    protected $casts = [
        'name' => NameCast::class,
        'description' => DescriptionCast::class,
        'image' => ImageCast::class,
    ];

    protected array $cascadeDeletes = ['sub_categories', 'media'];

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

    public function parent(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    public function sub_categories(): HasMany
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('categories')->singleFile();
    }
}
