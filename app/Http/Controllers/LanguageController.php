<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function index(){
        return view('language');
    }

    public function change(Request $request){
        App::setLocale($request->lang);
        session()->put('locale',$request->lang);
        return redirect()->back();

    }
}
