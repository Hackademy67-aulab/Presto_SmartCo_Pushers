<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
use Illuminate\Contracts\Session\Session as ContractsSessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class PublicController extends Controller
{
    public function home (User $user) {
        $ads=Ad::where('is_accepted', true)->take(7)->orderByDesc('created_at')->get();
        // $ads=Ad::take(6)->get()->sortByDesc('created_at');
        return view('welcome',compact('ads', 'user'));
    }

    public function createAds(){
        if (!Auth::user()) {
            Session::flash('aggiungiannuncio', "Per poter creare un annuncio, devi prima registrati");
            return view('auth.register');
        }else{
            return view('createAds');
        }
    }

    public function categoryAds(Category $category, Ad $ad){
        return view('categoryAds',compact('category', 'ad'));
    }

    public function detailAd(Ad $ad){
        return view('detailAd',compact('ad'));
    }

    public function showad(){
        $ads= Ad::where('is_accepted',true)->paginate(9);
        return view('ad.showad',compact('ads'));
    }

    public function searchAd(Request $request){
        $ads=Ad::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('ad.showad',compact('ads'));
    }

    public function setLanguage($lang){

        session()->put('locale',$lang);
        return redirect()->back();

    }


}
