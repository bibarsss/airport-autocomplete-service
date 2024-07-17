<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Services\Tasks\Airport\ReadAirportJsonTask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Airport::query()->truncate();
        $airports   = app(ReadAirportJsonTask::class)->run();
        $insertData = [];

        foreach ($airports as $key => $airport) {
            $airport_name_ru = $airport['airportName']['ru'] ?? null;
            $airport_name_en = $airport['airportName']['en'] ?? null;
            $city_name_ru    = $airport['cityName']['ru'] ?? null;
            $city_name_en    = $airport['cityName']['en'] ?? null;
            $area            = $airport['area'] ?? null;
            $country         = $airport['country'] ?? null;
            $timezone        = $airport['timezone'] ?? null;
            $lat             = $airport['lat'] ?? null;
            $lng             = $airport['lng'] ?? null;

            $insertData[] = [
                'key'             => $key,
                'city_name_ru'    => $city_name_ru,
                'city_name_en'    => $city_name_en,
                'airport_name_ru' => $airport_name_ru,
                'airport_name_en' => $airport_name_en,
                'area'            => $area,
                'country'         => $country,
                'timezone'        => $timezone,
                'lat'             => $lat,
                'lng'             => $lng,
            ];
        }

        $chunkedData = array_chunk($insertData,6000,true);

        foreach ($chunkedData as $data)
        {
            Airport::query()
                ->insert($data);
        }
    }
}
