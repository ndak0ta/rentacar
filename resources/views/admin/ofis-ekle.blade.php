@extends('admin.layout.app')

@section('content')
    <form class="container text-white">
        <div class="form-group">
            <label for="isim">Ofis İsmi</label>
            <input type="text" id="isim" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="isim@ornek.com">
        </div>
        <div class="form-group">
            <label for="tel">Telefon</label>
            <input type="text" id="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="adres">Adres</label>
            <textarea class="form-control" id="adres" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
@endsection
