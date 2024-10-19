<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AreasController extends Controller
{
    public function index()
    {
        $client = new Client();

        // Здесь вы можете указать дополнительные параметры запроса, если это необходимо
        $response = $client->request('GET', 'https://api.hh.ru/areas');
        $jsonData = json_decode($response->getBody());
        var_dump($data->parent_id);
        foreach ($jsonData as $data) {
            // echo $data->name . '<br />';
            var_dump($data->parent_id);
        }
    }
}
