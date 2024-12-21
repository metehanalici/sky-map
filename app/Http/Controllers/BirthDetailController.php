<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthDetail;
use App\Services\OpenCageService;
use GuzzleHttp\Client;

class BirthDetailController extends Controller
{
    protected $openCage;

    public function __construct(OpenCageService $openCage)
    {
        $this->openCage = $openCage;
    }

    public function showForm()
    {
        return view('form');
    }

    public function generateMap(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        $coords = $this->openCage->geocode($request->location);

        if (!$coords) {
            return back()->withErrors(['location' => 'Geocoding başarısız oldu.']);
        }


        return view('map', [
            'lat' => $coords['lat'],
            'lng' => $coords['lng'],
            'birth_date' => $request->birth_date,
        ]);
    }
}
