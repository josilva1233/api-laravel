<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'FirstName' => $this->FirstName,
            'LastName' => $this->LastName,
            'fullName' => $this->FirstName . ' ' . $this->LastName,
            'email' => $this->email,
            'Josias' => 'Josias',
        ];
    }
}
