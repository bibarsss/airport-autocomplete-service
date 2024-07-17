<?php

namespace App\Services\Tasks\Airport;

use Illuminate\Support\Facades\File;

class ReadAirportJsonTask
{
    public function run(): array
    {
        $contents = File::get(base_path('data/airports.json'));
        return json_decode(json: $contents, associative: true);
    }
}