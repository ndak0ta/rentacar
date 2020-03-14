<?php

namespace App\Http\Controllers;

use App\Ofis;
use Illuminate\Http\Request;

class OfisController extends Controller
{
    public function list()
    {
        $ofis = Ofis::all();

        // TODO ofis listeleme sayfası
        return view();
    }
}
