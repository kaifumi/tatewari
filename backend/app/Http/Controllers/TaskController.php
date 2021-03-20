<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $test = "テストメッセージ";
        return view('/task/index', compact('test'));
    }
}
