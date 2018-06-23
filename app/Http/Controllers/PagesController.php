<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PagesController extends Controller
{
    public function getIndex() {
        $client = new Client();
        $res = $client->request('GET', 'http://127.0.0.1:9999/api/products');
        $stringBody = (string)$res->getBody();
        $data = json_decode($stringBody, true);
        return view('index', ['data'=>$data]);
    }

    public function getAvailable() {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:9999/api/products/amount/0/1');
        $stringBody = (string)$res->getBody();
        $data = json_decode($stringBody, true);
        return view('index', ['data'=>$data]);
    }

    public function getNotAvailable() {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:9999/api/products/amount/0');
        $stringBody = (string)$res->getBody();
        $data = json_decode($stringBody, true);
        return view('index', ['data'=>$data]);
    }

    public function getMoreThan() {
        $client = new Client();
        $res = $client->request('POST', 'http://127.0.0.1:9999/api/products/amount/5/1');
        $stringBody = (string)$res->getBody();
        $data = json_decode($stringBody, true);
        return view('index', ['data'=>$data]);
    }
}
