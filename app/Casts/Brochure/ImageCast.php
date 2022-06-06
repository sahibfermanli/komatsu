<?php

namespace App\Casts\Brochure;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ImageCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes): mixed
    {
        if ($model->hasMedia('brochures')) {
            return $model->getFirstMediaUrl('brochures');
        }

        return asset('backend/assets/media/users/blank.png');
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return bool
     */
    public function set($model, string $key, $value, array $attributes): bool
    {
        return false;
    }
}
