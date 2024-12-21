<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenCageService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.opencage.key');
    }

    public function geocode($location)
    {
        $response = Http::get('https://api.opencagedata.com/geocode/v1/json', [
            'q' => $location,
            'key' => $this->apiKey,
            'limit' => 1,
        ]);

        if ($response->successful() && count($response->json()['results']) > 0) {
            $geometry = $response->json()['results'][0]['geometry'];
            return [
                'lat' => $geometry['lat'],
                'lng' => $geometry['lng'],
            ];
        }

        return null;
    }
}
