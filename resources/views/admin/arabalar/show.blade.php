@extends('admin.layout.app')

@section('title', 'Arabalar | ' . $araba->model)

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <img src="{{ $araba->img }}" class="img-thumbnail">
            </div>
            <div class="col-9">
                <ul class="list-group">
                    <li class="list-group-item">Marka:{{ $araba->marka }}</li>
                    <li class="list-group-item">Model:{{ $araba->model }}</li>
                    <li class="list-group-item">Motor Hacmi:{{ $araba->motor_hacmi }}</li>
                    <li class="list-group-item">Koltuk Sayısı:{{ $araba->koltuk_sayisi }}</li>
                    <li class="list-group-item">Yakıt Türü:{{ $araba->yakit_turu }}</li>
                    <li class="list-group-item">Vites Türü:{{ $araba->vites_turu }}</li>
                </ul>
                <div class="d-flex mt-2">
                    <a href="{{ url('admin/araba/' . $araba->id . '/edit') }}" class="mr-2">
                        <button class="btn btn-primary">Düzenle</button>
                    </a>
                    <form action="/admin/araba/{{ $araba->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Sil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
