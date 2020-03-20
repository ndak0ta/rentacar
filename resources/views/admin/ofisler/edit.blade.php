@extends('admin.layout.app')

@section('title', 'Ofis Düzenle | ' . $ofis->isim)

@section('content')
    <form action="/admin/ofis/{{ $ofis->id }}" class="container mt-3" method="POST">
        @method('PATCH')
        @include('admin.ofisler.form')
    </form>
@endsection
