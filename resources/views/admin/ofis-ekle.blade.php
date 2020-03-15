@extends('admin.layout.app')

@section('content')
    <form class="container text-white" method="POST">
        @if($errors->first('isim'))
            <div class="alert alert-danger my-2" role="alert">
                {{ $errors->first('isim') }}
            </div>
        @endif
        <div class="form-group">
            <label for="isim">Ofis İsmi</label>
            <input type="text" name="isim" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="isim@ornek.com">
        </div>
        <div class="form-group">
            <label for="tel">Telefon</label>
            <input type="text" name="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="sehir">Şehir</label>
            <select name="sehir" class="form-control">
                <option value="0" disabled selected></option>
                <option value="adana">Adana</option>
                <option value="adiyaman">Adıyaman</option>
                <option value="afyonkarahisar">Afyonkarahisar</option>
                <option value="agri">Ağrı</option>
                <option value="amasya">Amasya</option>
                <option value="ankara">Ankara</option>
                <option value="antalya">Antalya</option>
                <option value="artvin">Artvin</option>
                <option value="aydin">Aydın</option>
                <option value="balikesir">Balıkesir</option>
                <option value="bilecik">Bilecik</option>
                <option value="bingol">Bingöl</option>
                <option value="bitlis">Bitlis</option>
                <option value="bolu">Bolu</option>
                <option value="burdur">Burdur</option>
                <option value="bursa">Bursa</option>
                <option value="canakkale">Çanakkale</option>
                <option value="cankiri">Çankırı</option>
                <option value="corum">Çorum</option>
                <option value="denizli">Denizli</option>
                <option value="diyarbakir">Diyarbakır</option>
                <option value="edirne">Edirne</option>
                <option value="elazıg">Elazığ</option>
                <option value="erzincan">Erzincan</option>
                <option value="erzurum">Erzurum</option>
                <option value="eskisehir">Eskişehir</option>
                <option value="gaziantep">Gaziantep</option>
                <option value="giresun">Giresun</option>
                <option value="gumushane">Gümüşhane</option>
                <option value="hakkari">Hakkâri</option>
                <option value="hatay">Hatay</option>
                <option value="isparta">Isparta</option>
                <option value="mersin">Mersin</option>
                <option value="istanbul">İstanbul</option>
                <option value="izmir">İzmir</option>
                <option value="kars">Kars</option>
                <option value="kastamonu">Kastamonu</option>
                <option value="kayseri">Kayseri</option>
                <option value="kirklareli">Kırklareli</option>
                <option value="kirsehir">Kırşehir</option>
                <option value="kocaeli">Kocaeli</option>
                <option value="konya">Konya</option>
                <option value="kutahya">Kütahya</option>
                <option value="malatya">Malatya</option>
                <option value="manisa">Manisa</option>
                <option value="kahramanmaras">Kahramanmaraş</option>
                <option value="mardin">Mardin</option>
                <option value="mugla">Muğla</option>
                <option value="mus">Muş</option>
                <option value="nevsehir">Nevşehir</option>
                <option value="nigde">Niğde</option>
                <option value="ordu">Ordu</option>
                <option value="rize">Rize</option>
                <option value="sakarya">Sakarya</option>
                <option value="samsun">Samsun</option>
                <option value="siirt">Siirt</option>
                <option value="sinop">Sinop</option>
                <option value="sivas">Sivas</option>
                <option value="tekirdag">Tekirdağ</option>
                <option value="tokat">Tokat</option>
                <option value="trabzon">Trabzon</option>
                <option value="tunceli">Tunceli</option>
                <option value="sanliurfa">Şanlıurfa</option>
                <option value="usak">Uşak</option>
                <option value="van">Van</option>
                <option value="yozgat">Yozgat</option>
                <option value="zonguldak">Zonguldak</option>
                <option value="aksaray">Aksaray</option>
                <option value="bayburt">Bayburt</option>
                <option value="karaman">Karaman</option>
                <option value="kirikkale">Kırıkkale</option>
                <option value="batman">Batman</option>
                <option value="sirnak">Şırnak</option>
                <option value="bartin">Bartın</option>
                <option value="ardahan">Ardahan</option>
                <option value="igdir">Iğdır</option>
                <option value="yalova">Yalova</option>
                <option value="karabuk">Karabük</option>
                <option value="kilis">Kilis</option>
                <option value="osmaniye">Osmaniye</option>
                <option value="duzce">Düzce</option>
            </select>
        </div>
        <div class="form-group">
            <label for="adres">Adres</label>
            <textarea class="form-control" name="adres" rows="3"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Kaydet</button>
        @csrf
    </form>
@endsection
