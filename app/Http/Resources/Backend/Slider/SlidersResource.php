<?php

namespace App\Http\Resources\Backend\Slider;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $title_az
 * @property mixed $title_en
 * @property mixed $title_ru
 * @property mixed $created_at
 * @property mixed $created_user
 * @property mixed $description_az
 * @property mixed $description_en
 * @property mixed $description_ru
 * @property mixed $image
 * @property mixed $is_active
 * @property mixed $is_active_text
 */
class SlidersResource extends JsonResource
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
            'title_az' => $this->title_az,
            'title_en' => $this->title_en,
            'title_ru' => $this->title_ru,
            'description_az' => $this->description_az,
            'description_en' => $this->description_en,
            'description_ru' => $this->description_ru,
            'is_active' => $this->is_active,
            'is_active_text' => $this->is_active_text,
            'created_by' => blank($created_by) ? '---' : $created_by,
            'created_date' => $this->created_at?->toDateTimeString(),
        ];
    }
}
