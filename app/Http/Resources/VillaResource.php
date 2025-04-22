<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VillaResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            "ID"=>$this->id,
            "Villa_url"=>$this->villa_img,
            "Price"=>$this->price,
            "Space"=>$this->space,
            "Number_Of_Floor"=>$this->floor,
            "Number_Of_Bedrooms"=>$this->bedrooms,
            "Number_Of_Bathrooms"=>$this->bathrooms,
        ];
    }
}
