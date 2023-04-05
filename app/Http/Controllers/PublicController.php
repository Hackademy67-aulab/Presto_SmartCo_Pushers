<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
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
    
    public function categoryAds(Category $category){

        return view('categoryAds',compact('category'));
    }
    

}

