<?php

namespace App\Http\Controllers;

// use App\LikedImage;

use App\Http\Requests;
use Illuminate\Http\Request;

use Sapioweb\GeoCode\GeoCode as GeoCode;

// use GuzzleHttp\Exception\ClientException as ClientException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showHome()
    {
        $coords = GeoCode::getCoordinates('henderson nv 89074');

        // Instanciate guzzle client
        $client = new \GuzzleHttp\Client();

        // Add access token to URL
        $url = 'https://api.instagram.com/v1/media/search?lat=' . $coords['lat'] . '&lng=' . $coords['lng']
            . '&access_token=' . \Config::get('instagram.access_token')
            . '&distance=5000';

        // Try to make call
        try {

            // Make the request
            $instagramResponse = $client->request('GET', $url);

        // Catch request exception
        } catch (ClientException $e) {

            // Return exception
            return [
                'success' => false,
                'error' => $e->getMessage(),
            ];
        }

        $nearbyImages = json_decode($instagramResponse->getBody()->getContents());

        return view('welcome')->with([
            'nearbyImages' => $nearbyImages
        ]);
    }
}
