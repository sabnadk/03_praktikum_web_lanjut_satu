<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function index(){
        $post = post::all();
        return view('home', ['pendidikan' => $post]);
    }
}
