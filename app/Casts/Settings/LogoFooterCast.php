<?php

namespace App\Casts\Settings;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class LogoFooterCast implements CastsAttributes
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
        if ($model->hasMedia('settings_logo_footer')) {
            return $model->getFirstMediaUrl('settings_logo_footer');
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
