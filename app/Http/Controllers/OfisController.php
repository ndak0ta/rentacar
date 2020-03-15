<?php

namespace App\Http\Controllers;

use App\Ofis;
use Illuminate\Http\Request;

class OfisController extends Controller
{
    public function list()
    {
        $ofis = Ofis::all();

        return view('admin/ofis', [
            'ofisler' => $ofis,
        ]);
    }

    public function create()
    {
        return view('admin/ofis-ekle');
    }

    public function store()
    {
        $data = request()->validate([
            'isim' => 'required',
            'sehir' => 'required',
            'adres' => 'required',
            'tel' => 'required',
            'email' => 'email',
        ]);

        $ofis = new Ofis;
        $ofis->isim = request('isim');
        $ofis->email = request('email');
        $ofis->tel = request('tel');
        $ofis->sehir = request('sehir');
        $ofis->adres = request('adres');
        $ofis->save();

        return redirect('admin/ofisler');
    }
}
