<?php

namespace App\Http\Controllers;
use \Twitter;
use Illuminate\Http\Request;

class postpublish extends Controller
{
    function index(){
        return Twitter::postTweet(['status' => 'Laravel is beautiful', 'format' => 'json']);
    }
}
