<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class news extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = \Config::get('backend.url');

        $response = $client->request('GET', $url.'/api/news-index');
        $responseBody = json_decode($response->getBody());
        $responseInfo = $client->request('GET', $url.'/api/strona-glowna/');
        $responseBodyInfo = json_decode($responseInfo->getBody());
        $responseCzytania = $client->request('GET', $url.'/api/czytania/');
        $responseBodyCzytania = json_decode($responseCzytania->getBody());

        return view('main', [
            'html' => $responseBody->html,
            'Bierzmowanie' => $responseBodyInfo->data->Bierzmowanie,
            'Komunia' => $responseBodyInfo->data->I_Komunia,
            'Czytania' => $responseBodyCzytania->html,
        ]);
    }
    public function show($page = 1)
    {
        $client = new Client();
        $url = \Config::get('backend.url');

        $response = $client->request('GET', $url.'/api/news/'.$page);
        $responseBody = json_decode($response->getBody());
        if ($responseBody->html == 'false') {
            return view('errors.404');
        }
        return view('aktualnosci', [
            'html' => $responseBody->html,
        ]);
    }
    public function showOne($id)
    {
        $client = new Client();
        $url = \Config::get('backend.url');

        $response = $client->request('GET', $url.'/api/view-news/'.$id);
        $responseBody = json_decode($response->getBody());
        if ($responseBody->html == 'false') {
            return view('errors.404');
        }
        return view('post', [
            'html' => $responseBody->html,
        ]);
    }
}
