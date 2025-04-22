<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            "ID"=>$this->id,
            "order_url"=>$this->order_img,
            "Name"=>$this->name,
            "E-Mail"=>$this->email,
        ];
    }
}
