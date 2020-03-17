@extends('admin.layout.app')

@section('title', 'Ofisler')

@section('content')
    <a href="{{ url('/admin/ofisler/ekle') }}">
        <button class="btn btn-success my-3">Yeni Ofis Ekle</button>
    </a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">İsim</th>
            <th scope="col">Şehir</th>
            <th scope="col">Tel</th>
            <th scope="col">E-mail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ofisler as $ofis)
            <tr>
                <th scope="row">{{ $ofis->id }}</th>
                <td><a href="{{ url('/admin/ofisler/' . $ofis->id) }}">{{ $ofis->isim }}</a></td>
                <td>{{ $ofis->sehir }}</td>
                <td>{{ $ofis->tel }}</td>
                <td>{{ $ofis->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
