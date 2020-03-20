@if($errors->first('isim'))
    <div class="alert alert-danger my-2" role="alert">
        {{ $errors->first('isim') }}
    </div>
@endif
<div class="form-group">
    <label for="isim">Ofis İsmi</label>
    <input type="text" name="isim" class="form-control" value="{{ old('isim') ?? $ofis->isim }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="isim@ornek.com" value="{{ old('email') ?? $ofis->email }}">
</div>
<div class="form-group">
    <label for="tel">Telefon</label>
    <input type="text" name="tel" class="form-control" value="{{ old('tel') ?? $ofis->tel }}">
</div>
<div class="form-group">
    <label for="sehir">Şehir</label>
    <select required="required" class="form-control" name="sehir">
        @foreach ($sehirler as $sehir)
            <option value="{{ $sehir}}" {{ ($ofis->sehir == $sehir ? "selected":"") }}>{{ $sehir }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="adres">Adres</label>
    <textarea class="form-control" name="adres" rows="3">{{ old('adres') ?? $ofis->adres }}</textarea>
</div>
{{--    TODO resim ekleme    --}}


<button type="submit" class="btn btn-primary">Kaydet</button>
@csrf

