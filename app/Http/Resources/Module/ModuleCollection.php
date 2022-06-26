<?php

namespace App\Http\Resources\Module;

use Illuminate\Http\Resources\Json\JsonResource;

class ModuleCollection extends JsonResource
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
             'status'=>$this->isActive,
             'created' => \Carbon\Carbon::parse($this->created_at)->format('M D Y'),
            'href' => [
                'link' => route('module.show', $this->id)
            ]
        ];
    }
}
