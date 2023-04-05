<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home () {

        $ads=Ad::take(5)->get()->sortByDesc('created_at');

        return view('welcome',compact('ads'));
    }

    public function createAds(){
        return view('createAds');
    }


}

