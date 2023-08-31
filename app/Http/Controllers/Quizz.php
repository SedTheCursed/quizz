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

    public function init(Request $request) {

        $client = new Client(['verify' => false]);

        $user = $request->pseudo;
        $subject = $request->sujet;
        $difficulty = $request->difficulty;
        $url = "https://opentdb.com/api.php?amount=10&category="
            . $subject . "&difficulty="
            . $difficulty ."&type=multiple";
        $response = $client->get($url);
        $quizz = json_decode($response->getBody()->getContents(), true)["results"];

        session([
            "user" => $user,
            "subject" => $subject,
            "difficulty" => $difficulty,
            "quizz" => $quizz,
            "score" => 0,
            "currentIndex" => 0
        ]);
        
        return redirect("/quizz");
    }

    public function question() {
        $quizz = session()->get("quizz");
        $number = session()->get("currentIndex");
        $item = $quizz[$number];
        session(["currentQuestion" => $item]);

        $question = html_entity_decode($item["question"]);
        $answers = $this->generateAnswers($item);

        return view("index", [
            "number" => $number,
            "question" => $question,
            "answers" => $answers
        ]);
    }

    private function generateAnswers($item) {
        $correct_index = rand(0,3);
        $answers = [];
        $incorrect_answers = $item["incorrect_answers"];

        for($i = 0; $i < $correct_index; $i++) {
            array_push($answers, $incorrect_answers[$i]);
        }

        array_push($answers, $item["correct_answer"]);

        for ($i = $correct_index; $i < sizeof($incorrect_answers); $i++) {
            array_push($answers, $incorrect_answers[$i]);
        }

        session(["correct_index" => $correct_index]);

        return  $answers;
    }

}
