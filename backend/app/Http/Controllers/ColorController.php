<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index() {
        $test = "テストメッセージ";
        return view('/color/index', compact('test'));
    }
}
