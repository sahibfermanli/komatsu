<?php

namespace App\Models;

use App\Casts\Service\DescriptionCast;
use App\Casts\Service\NameCast;
use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy;

    protected $fillable = [
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
    ];
}
