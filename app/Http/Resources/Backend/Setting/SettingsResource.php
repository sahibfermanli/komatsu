<?php

namespace App\Http\Resources\Backend\Setting;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $title
 * @property mixed $logo
 * @property mixed $phone
 * @property mixed $email
 * @property mixed $address
 * @property mixed $meta_keywords
 * @property mixed $meta_description
 * @property mixed $google_site_verification
 * @property mixed $updated_at
 * @property mixed $updated_user
 */
class SettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $updated_user = $this->updated_user;
        $updated_by = $updated_user?->name . ' ' . $updated_user?->surname;

        return [
            'id' => $this->id,
            'title' => $this->title,
            'logo' => $this->logo,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'meta_keywords' => $this->meta_keywords,
            'meta_description' => $this->meta_description,
            'google_site_verification' => $this->google_site_verification,
            'updated_by' => blank($updated_by) ? '---' : $updated_by,
            'updated_date' => $this->updated_at?->toDateTimeString(),
        ];
    }
}
