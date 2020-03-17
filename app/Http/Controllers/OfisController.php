<?php

namespace App\Http\Controllers;

use App\Ofis;
use Illuminate\Http\Request;

class OfisController extends Controller
{
    public function index(Request $request)
    {
        $ofisler = Ofis::all();

        if ($request->is('admin/ofisler')) {
            return view('admin.ofisler.index', [
                'ofisler' => $ofisler,
            ]);
        } else {
            return view('ofisler', [
                'ofisler' => $ofisler,
            ]);
        }
    }

    public function create()
    {
        return view('admin.ofisler.create');
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

        Ofis::create($data);

        return redirect('admin/ofisler/index');
    }

    public function show(Ofis $ofis)
    {
//        $ofis = Ofis::where('id', $ofis)->firstOrFail(); Ofisi static olarak tanımladığımız için bu koda gerek kalmıyor

        return view('admin.ofisler.show', compact('ofis'));
    }
}
