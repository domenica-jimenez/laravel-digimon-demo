<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DigimonController extends Controller
{
    /**
     * Display a listing of digimons per page.
     */
    public function digimonList(Request $request)
    {
        if(!isset($request->pageSize) || !isset($request->page)) {
            return ["error"=>400,"message"=>"Bad request: Some parameters are missing"];
        }
        $digimons = Http::get('https://digi-api.com/api/v1/digimon', [
            'pageSize' => $request->pageSize,
            'page' => $request->page,
        ]);
        return json_decode($digimons->body());
    }

    /**
     * Display the specified digimon.
     */
    public function showDigimon($id)
    {
        $digimon = Http::get('https://digi-api.com/api/v1/digimon/'.$id);
        return json_decode($digimon->body());
    }

}
