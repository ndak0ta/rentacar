@extends('admin.layout.app')

@section('title', 'Ofisler | ' . $ofis->isim)

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <img src="{{ $ofis->img }}" class="img-thumbnail">
            </div>
            <div class="col-9">
                <ul class="list-group">
                    <li class="list-group-item">Ofis isimi:{{ $ofis->isim }}</li>
                    <li class="list-group-item">Tel:{{ $ofis->tel }}</li>
                    <li class="list-group-item">E-mail:{{ $ofis->email }}</li>
                    <li class="list-group-item">Şehir:{{ $ofis->sehir }}</li>
                    <li class="list-group-item">Adres:{{ $ofis->adres }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
