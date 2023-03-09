<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class wspolnotyParafialne extends Controller
{
    public function show()
    {
        $client = new Client();
        $url = \Config::get('backend.url');

        $response = $client->request('GET', $url.'/api/wspolnotyParafialne/');
        $responseBody = json_decode($response->getBody());

        return view('wspolnoty', [
            'MinistranciLektorzy' => $responseBody->data->Ministranci_i_Lektorzy,
            'Bielanki' => $responseBody->data->Bielanki,
            'Schola' => $responseBody->data->Schola,
            'Oaza' => $responseBody->data->Oaza,
            'OdnowaDuchuSwietym' => $responseBody->data->Odnowa_w_Duchu_Swietym,
            'KolaRozancowe' => $responseBody->data->Kola_Rozancowe,
            'PozostaleWspolnoty' => $responseBody->data->Pozostale_wspolnoty,
        ]);
    }
}
