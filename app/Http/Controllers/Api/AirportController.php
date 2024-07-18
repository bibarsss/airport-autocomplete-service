<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Airport\SearchRequest;
use App\Services\Actions\Airport\SearchDBAction;
use Illuminate\Http\JsonResponse;

class AirportController extends Controller
{
    public function searchDB(SearchDBAction $action, SearchRequest $request): JsonResponse
    {
        $data = $action->run($request);
        return response()->json(
            [
                'status' => true,
                'data'   => $data
            ]
        );
    }
}