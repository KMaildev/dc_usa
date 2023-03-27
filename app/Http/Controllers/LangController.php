<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LangController extends Controller
{

    public function lang_eng()
    {
        session()->forget('key');
        return Redirect()->back();
    }


    public function lang_mm()
    {
        session(['key' => 'mm']);
        return redirect()->back();
    }
}
