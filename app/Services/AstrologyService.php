<?php

namespace App\Services;

use SwissEphemeris;

class AstrologyService
{
    protected $swe;

    public function __construct()
    {
        $this->swe = new SwissEphemeris(); // Swiss Ephemeris entegrasyonu
    }

    public function calculate($lat, $lng, $birthDate, $birthTime)
    {
        $datetime = $birthDate . ' ' . $birthTime;

        // Doğum anındaki gezegen pozisyonları ve burçlar
        $data = $this->swe->calculateHoroscope($datetime, $lat, $lng);

        return $data;
    }
}
