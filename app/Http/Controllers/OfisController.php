<?php

namespace App\Http\Controllers;

use App\Ofis;
use Illuminate\Http\Request;

class OfisController extends Controller
{
    public $sehirler = array('Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin', 'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale', 'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir', 'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir', 'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya', 'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya', 'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak', 'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak', 'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce');

    public function index(Request $request)
    {
        $ofisler = Ofis::all();

        if ($request->is('admin/ofis')) {
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
        $ofis = new Ofis;

        return view('admin.ofisler.create', compact('ofis'))->with('sehirler', $this->sehirler);
    }

    public function store()
    {
        Ofis::create($this->validateRequest());

        return redirect('admin/ofis');
    }

    public function show(Ofis $ofis)
    {
//        $ofis = Ofis::where('id', $ofis)->firstOrFail(); Ofisi static olarak tanımladığımız için bu koda gerek kalmıyor

        return view('admin.ofisler.show', compact('ofis'));
    }

    public function edit(Ofis $ofis)
    {
        return view('admin.ofisler.edit', compact('ofis'))->with('sehirler', $this->sehirler);
    }

    public function update(Ofis $ofis)
    {
        $ofis->update($this->validateRequest());
        return redirect('admin/ofis' . $ofis->id);
    }

    public function destroy(Ofis $ofis)
    {
        $ofis->delete();

        return redirect('admin/ofis');
    }

    private function validateRequest()
    {
        return request()->validate([
            'isim' => 'required',
            'sehir' => 'required',
            'adres' => 'required',
            'tel' => 'required',
            'email' => 'email',
        ]);
    }
}
