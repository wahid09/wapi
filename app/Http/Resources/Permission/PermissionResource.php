<?php

namespace App\Http\Resources\Permission;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'     => $this->id,
            'module_name' => $this->module->name,
            'name'   => $this->name,
            'status' => $this->isActive,
            'created'=> \Carbon\Carbon::parse($this->created_at)->format('M D Y'),
            'updated'=> \Carbon\Carbon::parse($this->updated_at)->format('M D Y'),
        ];
    }
}
