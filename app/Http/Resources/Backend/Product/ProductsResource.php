<?php

namespace App\Http\Resources\Backend\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $category
 * @property mixed $name_az
 * @property mixed $name_en
 * @property mixed $name_ru
 * @property mixed $slug
 * @property mixed $created_at
 * @property mixed $created_user
 * @property mixed $category_id
 * @property mixed $model
 * @property mixed $capacity
 * @property mixed $front
 * @property mixed $travel_speed
 * @property mixed $lifting_speed
 * @property mixed $outside_turning_radius
 * @property mixed $operating_weight
 * @property mixed $engine_power
 * @property mixed $image
 */
class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $created_user = $this->created_user;
        $created_by = $created_user?->name . ' ' . $created_user?->surname;

        return [
            'id' => $this->id,
            'image' => $this->image,
            'category' => $this->category?->name_en ?? '---',
            'category_id' => $this->category_id,
            'name_az' => $this->name_az,
            'name_en' => $this->name_en,
            'name_ru' => $this->name_ru,
            'slug' => $this->slug,
            'model' => $this->model,
            'capacity' => $this->capacity,
            'front' => $this->front,
            'travel_speed' => $this->travel_speed,
            'lifting_speed' => $this->lifting_speed,
            'outside_turning_radius' => $this->outside_turning_radius,
            'operating_weight' => $this->operating_weight,
            'engine_power' => $this->engine_power,
            'created_by' => blank($created_by) ? '---' : $created_by,
            'created_date' => $this->created_at?->toDateTimeString(),
        ];
    }
}
