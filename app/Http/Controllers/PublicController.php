<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home () {

        $ads=Ad::take(4)->get()->sortByDesc('created_at');

        return view('welcome',compact('ads'));
    }

    public function createAds(){
        return view('createAds');
    }

    public function categoryAds(Category $category){

        return view('categoryAds',compact('category'));
    }

    public function detailAd(Ad $ad){
        return view('detailAd',compact('ad'));
    }
}
