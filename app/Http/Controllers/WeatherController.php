<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function getCurrentWeather(Request $request){
        $apiUrl = "http://api.weatherapi.com/v1/current.json";
        $apiParams = [
            'key' => 'c4535de2be074b6d9f2101903241811',
            'q' => $request->query('place'),
            'limit' => 9670,
        ];

        // Build API URL with query parameters
        $apiUrlWithParams = $apiUrl . '?' . http_build_query($apiParams);

        // Fetch data from API using Laravel's HTTP Client
        $response = Http::get($apiUrlWithParams);

        // Check if response is valid
        if ($response->failed()) {
            return response()->json(['error' => 'Unable to fetch data from API.'], 500);
        }
        // Decode JSON into PHP array
        $data = $response->json();

        // Return filtered data as JSON
        return response()->json($data);
    }
}
