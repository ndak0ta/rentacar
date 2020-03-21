@extends('admin.layout.app')

@section('title', 'Arabalar')

@section('content')
    <a href="{{ url('/admin/araba/create') }}">
        <button class="btn btn-success my-3">Yeni Araba Ekle</button>
    </a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marka</th>
            <th scope="col">Model</th>
            <th scope="col">Motor Hacmi</th>
            <th scope="col">Koltuk Sayısı</th>
            <th scope="col">Yakıt Türü</th>
            <th scope="col">Vites Türü</th>
        </tr>
        </thead>
        <tbody>
        @foreach($arabalar as $araba)
            <tr>
                <th scope="row">{{ $araba->id }}</th>
                <td><a href="{{ url('/admin/araba/' . $araba->id) }}">{{ $araba->marka }}</a></td>
                <td>{{ $araba->model }}</td>
                <td>{{ $araba->motor_hacmi }}</td>
                <td>{{ $araba->koltuk_sayisi }}</td>
                <td>{{ $araba->yakit_turu }}</td>
                <td>{{ $araba->vites_turu }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
