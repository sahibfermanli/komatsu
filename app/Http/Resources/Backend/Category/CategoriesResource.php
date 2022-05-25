<?php

namespace App\Http\Resources\Backend\Category;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $parent
 * @property mixed $name_az
 * @property mixed $name_en
 * @property mixed $name_ru
 * @property mixed $slug
 * @property mixed $created_at
 * @property mixed $created_user
 * @property mixed $parent_id
 */
class CategoriesResource extends JsonResource
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
            'parent' => $this->parent?->name_en ?? '---',
            'parent_id' => $this->parent_id,
            'name_az' => $this->name_az,
            'name_en' => $this->name_en,
            'name_ru' => $this->name_ru,
            'slug' => $this->slug,
            'created_by' => blank($created_by) ? '---' : $created_by,
            'created_date' => $this->created_at?->toDateTimeString(),
        ];
    }
}
