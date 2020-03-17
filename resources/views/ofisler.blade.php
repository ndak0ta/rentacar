@extends('layout.app')

@section('title', 'Rentacar | Ofislerimiz')

@section('content')
    <div class="container my-5">
        @foreach($ofisler as $ofis)
            <div class="media">
                <img src="{{ asset($ofis->img) }}" class="align-self-start mr-3">
                <div class="media-body">
                    <h3 class="mt-0 font-weight-bold">{{ $ofis->isim }}</h3>
                    <div class="text-muted">Telefon:{{ $ofis->tel  }}</div>
                    <div class="text-muted">E-mail:{{ $ofis->email  }}</div>
                    <div class="text-muted">Şehir:{{ $ofis->sehir  }}</div>
                    <div class="text-muted">Adres:{{ $ofis->adres  }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
