<?php

namespace App\Http\Resources\Backend\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $surname
 * @property mixed $username
 * @property mixed $email
 * @property mixed $created_at
 * @property mixed $created_user
 */
class UsersResource extends JsonResource
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
            'name' => $this->name,
            'surname' => $this->surname,
            'username' => $this->username,
            'email' => $this->email,
            'created_by' => blank($created_by) ? '---' : $created_by,
            'created_date' => $this->created_at?->toDateTimeString(),
        ];
    }
}
