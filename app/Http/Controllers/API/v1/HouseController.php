<?php

namespace App\Http\Controllers\API\v1;

use App\Filters\HouseFilter;
use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Response;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(HouseFilter $houseFilter)
    {
        $houses = House::Filter($houseFilter)->paginate(10);

        return response($houses, Response::HTTP_OK);
    }
}
