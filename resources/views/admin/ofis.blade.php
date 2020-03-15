@extends('admin.layout.app')

@section('content')
    <a href="{{ url('/admin/ofisler/ekle') }}">
        <button class="btn btn-success m-3">Yeni Ofis Ekle</button>
    </a>

    <table class="table text-white">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">İsim</th>
            <th scope="col">Şehir</th>
            <th scope="col">Tel</th>
            <th scope="col">E-mail</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($ofisler as $ofis)
            <tr>
                <th scope="row">{{ $ofis->id }}</th>
                <td>{{ $ofis->isim }}</td>
                <td>{{ $ofis->sehir }}</td>
                <td>{{ $ofis->tel }}</td>
                <td>{{ $ofis->email }}</td>
                <td><button class="btn btn-primary">Düzenle</button><button class="btn btn-danger ml-3">Sil</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
