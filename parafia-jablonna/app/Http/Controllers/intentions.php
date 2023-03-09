<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class intentions extends Controller
{
    public function show($page = 1)
    {
        $client = new Client();
        $url = \Config::get('backend.url');

        $response = $client->request('GET', $url.'/api/intentions/'.$page);
        $responseBody = json_decode($response->getBody());
        if ($responseBody->html == 'false') {
            return view('errors.404');
        }
        return view('intencje', [
            'html' => $responseBody->html,
        ]);
    }
}
