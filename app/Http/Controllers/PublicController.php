<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Contracts\Session\Session as ContractsSessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class PublicController extends Controller
{
    public function home () {

        $ads=Ad::take(6)->orderByDesc('created_at')->get();
        // $ads=Ad::take(6)->get()->sortByDesc('created_at');
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

    public function lavoraConnoi(){
        if (!Auth::user()) {
            FacadesSession::flash('lavoraConNoi', "Per poter entrare a far parte del nostro team, devi prima registrati");
            return view('auth.register');
        }else{

            return view('lavoraconnoi');
        }

    }
}
