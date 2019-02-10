<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExternalController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos');
        $contents = $response->getBody()->getContents();
        $json = json_decode($contents);

        return response()->json($json);
    }
}
