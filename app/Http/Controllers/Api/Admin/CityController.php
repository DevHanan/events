<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use App\Traits\ApiResponse;

class CityController extends Controller
{

    use ApiResponse;

    public function index(){

        $countries = City::all();

        return $this->okApiResponse(CityResource::collection($countries),__('Cities loaded'));
    }
}
