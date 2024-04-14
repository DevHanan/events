<?php

namespace App\Http\Resources;

use App\Http\Requests\EventImageRequest;
use App\Http\Resources\ProviderResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'id'=>$this->id,
            'images'=>EventImageResource::collection($this->images),
            'image'=> url($this->images()->first()->url),
            'name'=>$this->name,
            'from'=>$this->from,
            'to'=>$this->to,
            'price'=>$this->price,
            'interest'=>new InterestResource($this->interest),
            'city'=>new CityResource($this->city) ?? '',
            'provider'=>new ProviderResource($this->provider) ?? '',
            'address'=>$this->address,
            'about'=>$this->about,
            'status'=>$this->status,
            'cancel_reason'=>$this->cancel_reason ??'',
            'total_attend_count'=>$this->total_attend_count,
            'lat'=>$this->lat,
            'lng'=>$this->lng,
            'terms'=>$this->terms,
            'users_images'=>UserEventImageResource::collection($this->users->take(5)),
            'files'=>EventFileResource::collection($this->files) ?? '',
            'share_text' =>'#',
            'is_favourite' =>$this->is_favourite,
            'tickets'  => EventTicketResource::collection($this->eventTickets)
        ];
    }
}
