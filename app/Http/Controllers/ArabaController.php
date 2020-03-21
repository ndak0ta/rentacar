<?php

namespace App\Http\Controllers;

use App\Araba;
use Illuminate\Http\Request;

class ArabaController extends Controller
{
    public function index(Request $request)
    {
        $arabalar = Araba::all();

        if ($request->is('admin/araba')) {
            return view('admin.arabalar.index', [
                'arabalar' => $arabalar,
            ]);
        } else {
            return view('arabalar', [
                'arabalar' => $arabalar,
            ]);
        }
    }

    public function create()
    {
        $araba = new Araba();

        return view('admin.arabalar.create', compact('araba'));
    }

    public function store()
    {
        Araba::create($this->validateRequest());

        return redirect('admin/araba');
    }

    public function show(Araba $araba)
    {
        return view('admin.arabalar.show', compact('araba'));
    }

    public function edit(Araba $araba)
    {
        return view('admin.arabalar.edit', compact('araba'));
    }

    public function update(Araba $araba)
    {
        $araba->update($this->validateRequest());
        return redirect('admin/araba/' . $araba->id);
    }

    public function destroy(Araba $araba)
    {
        $araba->delete();

        return redirect('admin/araba');
    }

    private function validateRequest()
    {
        return request()->validate([
            'marka' => 'required',
            'model' => 'required',
            'motor_hacmi' => 'required',
            'koltuk_sayisi' => 'required',
            'yakit_turu' => 'required',
            'vites_turu' => 'required',
        ]);
    }
}
