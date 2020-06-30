<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog');
    }

    public function published() {
        $this->published = true;
        $this->save();
    }

}
