<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray($request)
    {
        return array_merge(
            parent::toArray($request),
            [
                'screenshots' => $this->screenshots
            ]
        );
    }
}
