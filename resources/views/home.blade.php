@extends('layout.app')

@section('title', 'Rentcar | Anasasyfa')

@section('content')
    <div class="q-res-bg bg-cover bg-center d-flex py-5">
        <form class="container border border-danger bg-danger rounded-lg my-5 pt-2 pb-2" method="">
            <div class="row mx-1 my-2">
                <div class="col-sm mb-sm-2">
                    <input class="form-control form-control-lg" type="text" placeholder="Alış Şubesi">
                </div>
                <div class="col-sm my-auto  mb-sm-2">
                    <input placeholder="Alış Tarihi" class="form-control form-control-lg" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"/>
                </div>
                <div class="col-sm d-flex my-auto  mb-sm-2">
                    <select name="" id="" class="form-control form-control-lg">
                        <option value="" selected disabled>Alış</option>
                        @for($i = 0; $i < 24; $i++)
                            <option value="{{ sprintf("%02d", $i) }}">{{ sprintf("%02d", $i) }}</option>
                        @endfor
                    </select>
                    <select name="" id="" class="form-control form-control-lg">
                        <option value="" selected disabled>Saati</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                </div>
                <div class="col-sm my-auto  mb-sm-2">
                    <input placeholder="Teslim Tarihi" class="form-control form-control-lg" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"/>
                </div>
                <div class="col-sm d-flex my-auto">
                    <select name="" id="" class="form-control form-control-lg">
                        <option value="" selected disabled>Teslim</option>
                        @for($i = 0; $i < 24; $i++)
                            <option value="{{ sprintf("%02d", $i) }}">{{ sprintf("%02d", $i) }}</option>
                        @endfor
                    </select>
                    <select name="" id="" class="form-control form-control-lg">
                        <option value="" selected disabled>Saati</option>
                        <option value="00">00</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                </div>
            </div>
            <div class="row mx-1 my-2">
                <div class="col-sm">
                    <input id="teslimsube" class="form-control form-control-lg" type="text" placeholder="Teslim Şubesi" hidden>
                </div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
            </div>
            <div class="row mx-1 my-2 text-light">
                <div class="col-sm">
                    <input type="checkbox" id="subecheck" class="" onchange="subeChecked()"> Farklı bir şubeye teslim etmek istiyorum
                </div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm"></div>
                <div class="col-sm">
                    <button type="submit" class="btn btn-dark">
                        <img src="{{ asset('svg/travel-car.svg') }}" alt="" class="h-8"><span class="text-xl"> Kirala</span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide d-flex" data-ride="carousel" style="max-height: 450px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/slide-1.jpeg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slide-2.jpeg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slide-3.jpeg') }}" class="d-block w-100" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="card-group">
        <div class="card">
            <img src="{{ asset('img/card-1.jpeg') }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Yurtiçi Kampanyalar!</h5>
                <p class="card-text">Yurt içi kampanyalar sen tofaşın tadına var diye bekliyor!</p>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('img/card-2.jpeg') }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Az Yakar Çok Kaçar</h5>
                <p class="card-text">İşte eniştelerin vazgeçilmezi Doblo! Piknik için mükemmel araç!</p>
            </div>
        </div>
        <div class="card">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
        </div>
    </div>
@endsection
