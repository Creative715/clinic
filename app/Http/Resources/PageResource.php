<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'seo_title' => $this->seo_title,
            'category_id ' => $this->category_id ,
            'intro' => $this->intro,
            'page_content' => $this->page_content,
            'description' => $this->description,
            'price_block' => $this->price_block,
            'dot_block' => $this->dot_block,
            'diagnostic' => $this->diagnostic,
            'slug' => $this->slug,
            'img' => $this->img,
            'statistic' => new StateResource($this->whenLoaded('state')),
        ];
    }
}
