<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Services\Tasks\Airport\ReadAirportJsonTask;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $a = Airport::all();

        return response()->json([
            'data' => $a
        ]);
    }
}