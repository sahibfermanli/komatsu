<?php

namespace App\Http\Resources\Backend\Service;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $name_az
 * @property mixed $name_en
 * @property mixed $name_ru
 * @property mixed $created_at
 * @property mixed $created_user
 * @property mixed $description_az
 * @property mixed $description_en
 * @property mixed $description_ru
 */
class ServicesResource extends JsonResource
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
            'name_az' => $this->name_az,
            'name_en' => $this->name_en,
            'name_ru' => $this->name_ru,
            'description_az' => $this->description_az,
            'description_en' => $this->description_en,
            'description_ru' => $this->description_ru,
            'created_by' => blank($created_by) ? '---' : $created_by,
            'created_date' => $this->created_at?->toDateTimeString(),
        ];
    }
}
