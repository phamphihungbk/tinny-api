<?php

namespace TinnyApi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'isActive' => $this->is_active,
            'emailVerifiedAt' => $this->email_verified_at,
            'createdAt' => $this->created_at->format('Y-m-d\TH:i:s'),
            'updatedAt' => $this->updated_at->format('Y-m-d\TH:i:s'),
        ];
    }
}