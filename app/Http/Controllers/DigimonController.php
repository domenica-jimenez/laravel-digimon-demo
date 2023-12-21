<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DigimonController extends Controller
{
    /**
     * Display a listing of digimons per page.
     * TODO: validate jwt
     */
    public function digimonList(Request $request)
    {
        $bodyContent = json_decode($request->getContent());
        if(!isset($bodyContent->pageSize) || !isset($bodyContent->page) || !isset($bodyContent->token)) {
            return ["error"=>400,"message"=>"Bad request: Some parameters are missing"];
        }
        $digimons = Http::get('https://digi-api.com/api/v1/digimon', [
            'pageSize' => $bodyContent->pageSize,
            'page' => $bodyContent->page,
        ]);
        return json_decode($digimons->body());
    }

    /**
     * Display the specified digimon.
     * TODO: validate jwt
     */
    public function showDigimon(Request $request)
    {
        $bodyContent = json_decode($request->getContent());
        if(!isset($bodyContent->id) || !isset($bodyContent->token)) {
            return ["error"=>400,"message"=>"Bad request: Some parameters are missing"];
        }
        $digimon = Http::get('https://digi-api.com/api/v1/digimon/'.strval($bodyContent->id));
        return json_decode($digimon->body());
    }

}
