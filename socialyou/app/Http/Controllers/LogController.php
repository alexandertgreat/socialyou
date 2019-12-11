<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
class LogController extends Controller
{
    public static function add_log(Request $request) {
        $topic = $request->input('topic');
        $action = $request->input('action');
        $text = $request->input('topic');
        $correctAnswer = $request->input('correctAnswer');
        $userAnswer = $request->input('userAnswer');

        $log = new Log();
        $log->topic = $topic;
        $log->action = $action;
        $log->text = $text;
        $log->correctAnswer = $correctAnswer;
        $log->userAnswer = $userAnswer;
        $log->save();
    }

}
