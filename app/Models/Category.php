<?php

namespace App\Models;

use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy, CascadeSoftDeletes;

    protected $fillable = [
        'parent_id',
        'name_az',
        'name_en',
        'name_ru',
        'created_by',
    ];

    protected array $cascadeDeletes = ['sub_categories'];

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
}
