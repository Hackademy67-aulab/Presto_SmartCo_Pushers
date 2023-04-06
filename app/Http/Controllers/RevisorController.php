<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function zona_revisore(){
        $ad_da_revisionare=Ad::where('is_accepted', null)->first();
        return view('ZonaRevisore', compact('ad_da_revisionare'));
    }
}
