<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Airport\SearchRequest;
use App\Services\Actions\Airport\SearchDBAction;

class AirportController extends Controller
{
    public function searchDB(SearchDBAction $action, SearchRequest $request)
    {
        $data = $action->run();
        return response()->json(
            [
                'status' => true,
                'data'   => $data
            ]
        );
    }
}