<?php

namespace App\Http\Resources\Backend\Brochure;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $title_az
 * @property mixed $title_en
 * @property mixed $title_ru
 * @property mixed $created_at
 * @property mixed $created_user
 * @property mixed $image
 * @property mixed $file
 */
class BrochuresResource extends JsonResource
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
            'file' => $this->file,
            'title_az' => $this->title_az,
            'title_en' => $this->title_en,
            'title_ru' => $this->title_ru,
            'created_by' => blank($created_by) ? '---' : $created_by,
            'created_date' => $this->created_at?->toDateTimeString(),
        ];
    }
}
