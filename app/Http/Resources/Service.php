<?php

namespace App\Http\Resources;

use App\Http\Controllers\SubCategoryServiceController;
use Illuminate\Http\Resources\Json\JsonResource;

class Service extends JsonResource
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
            'identifier' => $this->id,
            'title' => $this->name,
            'details'=>$this->description,
            'time_need'=>$this->quantity,
             'picture' => $this->image,
             'sub-category' =>SubCategoryServiceController::subcategories($this->sub_categories_id),
            'price' => $this->payment,
            'creationDate' =>$this->created_at,
            'lastChange' => $this->updated_at,
            'deletedDate' => isset($this->deleted_at) ?  $this->deleted_at : null,
            //
        ];
    }
}