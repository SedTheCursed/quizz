<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Quizz extends Controller
{
    public function index() {
        $client = new Client(['verify' => false]);
        $response = $client->get("https://opentdb.com/api_category.php");
        $subjects = json_decode($response->getBody()->getContents(), true)["trivia_categories"];

        return view('quizz.index', ["subjects" => $subjects]);
    }

    public function quizz(Request $request) {

        $client = new Client(['verify' => false]);
        
        $user = $request->pseudo;
        $subject = $request->sujet;
        $difficulty = $request->drone;
        $url = "https://opentdb.com/api.php?amount=10&category="
            . $subject . "&difficulty=" 
            . $difficulty ."&type=multiple";
        $response = $client->get($url);
        $quizz = json_decode($response->getBody()->getContents(), true);
        
        return view("index", ['quizz' => $quizz]);
    }
}
