@extends('admin.layout.app')

@section('title', 'Araba Ekle')

@section('content')
    <form action="{{ route('araba.store') }}" method="POST" class="container mt-2">
        @include('admin.arabalar.form')
    </form>
@endsection
