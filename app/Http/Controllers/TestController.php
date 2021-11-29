<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function displayArticle(){
        return view('articles.index');
    }
}
