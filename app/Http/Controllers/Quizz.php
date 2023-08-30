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
}
