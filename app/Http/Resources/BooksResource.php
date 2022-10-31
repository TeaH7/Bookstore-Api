<?php

namespace App\Http\Resources;

use App\Models\Author;
use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
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
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name, 
                'author' => $this->authors,
                'description' => $this->description, 
                'publication_year' => $this->publication_year, 
                'created_at' => $this->created_at, 
                'updated_at' => $this->updated_at,
                
            ]
           
        ];
    }
}