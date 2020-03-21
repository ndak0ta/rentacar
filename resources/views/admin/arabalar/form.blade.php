@if($errors->first('isim'))
    <div class="alert alert-danger my-2" role="alert">
        {{ $errors->first('isim') }}
    </div>
@endif
<div class="form-group">
    <label for="isim">Marka</label>
    <input type="text" name="marka" class="form-control" value="{{ old('marka') ?? $araba->marka }}">
</div>
<div class="form-group">
    <label for="email">Model</label>
    <input type="text" class="form-control" name="model" value="{{ old('model') ?? $araba->model }}">
</div>
<div class="form-group">
    <label for="tel">Motor Hacmi</label>
    <input type="text" name="motor_hacmi" placeholder="1.4, 2.0 şeklinde girin" class="form-control" value="{{ old('motor_hacmi') ?? $araba->motor_hacmi }}">
</div>
<div class="form-group">
    <label for="tel">Koltuk Sayısı</label>
    <input type="text" name="koltuk_sayisi" class="form-control" value="{{ old('koltuk_sayisi') ?? $araba->koltuk_sayisi }}">
</div>
<div class="form-group">
    <label for="tel">Yakıt Türü</label>
    <input type="text" name="yakit_turu" class="form-control" value="{{ old('yakit_turu') ?? $araba->yakit_turu }}">
</div>
<div class="form-group">
    <label for="tel">Vites Türü</label>
    <input type="text" name="vites_turu" class="form-control" value="{{ old('vites_turu') ?? $araba->vites_turu }}">
</div>
{{--    TODO resim ekleme    --}}


<button type="submit" class="btn btn-primary">Kaydet</button>
@csrf

