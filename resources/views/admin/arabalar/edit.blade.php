@extends('admin.layout.app')

@seciton('title', 'Arabalar | ' . $araba->model)

@section('content')
    <form action="/admin/araba/{{ $araba->id }}" method="POST" class="container mt-2">
        @method('PATCH')
        @include('admin.arabalar.form')
    </form>
@endsection
