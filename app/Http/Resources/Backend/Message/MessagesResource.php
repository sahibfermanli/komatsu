<?php

namespace App\Http\Resources\Backend\Message;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $full_name
 * @property mixed $email
 * @property mixed $phone
 * @property mixed $message
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $updated_user
 */
class MessagesResource extends JsonResource
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
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'created_date' => $this->created_at?->toDateTimeString(),
            'updated_by' => blank($updated_by) ? '---' : $updated_by,
            'updated_date' => $this->updated_at?->toDateTimeString(),
        ];
    }
}
