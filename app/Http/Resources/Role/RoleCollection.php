<?php

namespace App\Http\Resources\Role;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_bn' => $this->name_bn,
            'url' => $this->slug,
            'description' => $this->description,
            'status' => $this->isActive,
            'isDeleteable' => $this->deleteable == 1 ? "Not Deleteable" : "Deleteable",
            'created' => \Carbon\Carbon::parse($this->created_at)->format('M D Y'),
            'updated' => \Carbon\Carbon::parse($this->updated_at)->format('M D Y'),
        ];
    }
}