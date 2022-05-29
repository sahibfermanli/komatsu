<?php

namespace App\Models;

use App\Traits\ActionBy;
use App\Traits\CreatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes, ActionBy, CreatedBy;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message',
        'created_by',
    ];
}
