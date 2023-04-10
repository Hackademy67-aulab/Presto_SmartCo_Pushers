<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class RevisorController extends Controller
{
    public function zona_revisore(){
        $ad_da_revisionare=Ad::where('is_accepted', null)->first();
        return view('ZonaRevisore', compact('ad_da_revisionare'));
    }

    public function accettaad(Ad $ad){

        $ad->setAccepted(true);
        return redirect()->back()->with('message', "Complimenti hai accettato l'anunncio");

    }

    public function rifiutaad(Ad $ad){

        $ad->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'annuncio");

    }

    public function becomerevisor(){
        if (!Auth::user()) {
            Session::flash('lavoraConNoi', "Per poter entrare a far parte del nostro team, devi prima registrati");
            return false;
        }else{
            Mail::to("hello@example.com")->send(new BecomeRevisor(Auth::user()));
            return true;
        }
    }

    public function makerevisor(User $user){
        Artisan::call('smartco:MakeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti! Sei diventato un revisore del sito');
    }
}
