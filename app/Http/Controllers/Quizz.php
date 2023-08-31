<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Quizz extends Controller
{
    public function index() {
        $client = new Client(['verify' => false]);

        if(!session()->has("apiToken")) {
            $response = $client->get("https://opentdb.com/api_token.php?command=request");
            $token = json_decode($response->getBody()->getContents(), true)["token"];
            session(["apiToken" => $token]);
        }

        $response = $client->get("https://opentdb.com/api_category.php");
        $subjects = json_decode($response->getBody()->getContents(), true)["trivia_categories"];

        $user = (session()->has("user"))?session()->get("user"):"";

        return view('quizz.index', ["subjects" => $subjects, 'user' => $user]);
    }

    public function quizz(Request $request) {

        $client = new Client(['verify' => false]);

        $user = $request->pseudo;
        $subject = $request->sujet;
        $difficulty = $request->difficulty;
        $url = "https://opentdb.com/api.php?amount=10&category="
            . $subject . "&difficulty="
            . $difficulty ."&type=multiple";
        $response = $client->get($url);
        $quizz = json_decode($response->getBody()->getContents(), true);

        return view("index", ['quizz' => $quizz]);
    }

}
