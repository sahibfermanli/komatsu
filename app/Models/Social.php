<?php

namespace App\Models;

use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Social extends Model
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy;

    protected $fillable = [
        'name',
        'icon',
        'url',
        'created_by',
    ];
}
