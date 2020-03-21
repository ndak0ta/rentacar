@extends('layout.app')

@section('title', 'Rentacar | Arabalarımız')

@section('content')
    <div class="container my-5">
        @foreach($arabalar as $araba)
            <div class="media">
                <img src="{{ asset($araba->img) }}" class="align-self-start mr-3">
                <div class="media-body">
                    <h3 class="mt-0 font-weight-bold">{{ $araba->model }}</h3>
                    <div class="text-muted">Marka:{{ $araba->marka  }}</div>
                    <div class="text-muted">Motor Hacmi:{{ $araba->motor_hacmi  }}</div>
                    <div class="text-muted">Koltuk Sayısı:{{ $araba->koltuk_sayisi  }}</div>
                    <div class="text-muted">Yakıt Türü:{{ $araba->yakit_turu  }}</div>
                    <div class="text-muted">Vites Türü:{{ $araba->vites_turu  }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
