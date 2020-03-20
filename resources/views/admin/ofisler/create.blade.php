@extends('admin.layout.app')

@section('title', 'Ofis Ekle')

@section('content')
    <form class="container mt-3" method="POST">
        @include('admin.ofisler.form')
    </form>
@endsection
