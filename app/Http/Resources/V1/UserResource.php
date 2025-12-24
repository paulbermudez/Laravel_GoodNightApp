<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'encryptedPassword' => $this->encrypted_password,
            'resetPasswordToken' => $this->reset_password_token,
            'resetPasswordSentAt' => $this->reset_password_sent_at,
            'rememberCreatedAt' => $this->remember_created_at,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'jti' => $this->jti,
            'token' => $this->token,
        ];
    }
}
