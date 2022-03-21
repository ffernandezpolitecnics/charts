<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelCiudadResource;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

class ChartApiController extends Controller
{
    public function index()
    {
        $ciudades = Hotel::with('ciudad')
            ->select(['id_ciudad', DB::raw('count(*) as count')])
            ->groupBy('id_ciudad')
            ->get();

        return HotelCiudadResource::collection($ciudades);

    }
}