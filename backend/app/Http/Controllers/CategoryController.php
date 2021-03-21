<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $test = "カテゴリメッセージ";
        return view('/category/index', compact('test'));
    }
}
