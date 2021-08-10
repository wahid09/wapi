<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModuleResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'name_bn'=> $this->name_bn,
            'status'=>$this->isActive == 1 ? "Active" : "Inactive",
            'created' => \Carbon\Carbon::parse($this->created_at)->format('M D Y'),
            'updated' => \Carbon\Carbon::parse($this->updated_at)->format('M D Y'),
        ];
    }
}
