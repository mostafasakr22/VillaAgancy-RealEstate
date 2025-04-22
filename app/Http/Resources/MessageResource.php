<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
        public function toArray($request)
    {
        return [
            "ID"=>$this->id,
            "Name"=>$this->name,
            "E-Mail"=>$this->email,
            "Message"=>$this->message,
        ];
    }
}
