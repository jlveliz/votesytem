<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DignityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['lists'] = ListVoteResource::collection($this->lists);
        return $data;
    }
}
