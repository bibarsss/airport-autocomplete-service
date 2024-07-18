<?php

namespace App\Services\Actions\Airport;

use App\Models\Airport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Http\FormRequest;

class SearchDBAction
{
    public function run(FormRequest $request): Collection|array
    {
        $query = $request->input('query');
        return Airport::query()
            ->where('city_name_en', 'LIKE', "%{$query}%")
            ->orWhere('airport_name_en', 'LIKE', "%{$query}%")
            ->get();
    }
}