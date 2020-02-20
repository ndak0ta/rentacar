@extends('layouts.app')

@section('content')
    <div class="py-24 q-res-bg bg-cover bg-center">
        <div class="mx-auto border border-red-600 bg-red-600 w-9/12 rounded">
            <div class="py-4 px-4 grid grid-cols-5 gap-4">
                {{-- TODO Veritabanı bağlantılarını yap,şehirleri veritabanınıdan çek --}}
                <div class="inline-block relative">
                    <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option selected disabled>Alış Şubesi</option>
                        <option value="06">Ankara</option>
                        <option value="16">Bursa</option>
                        <option value="34">İstanbul</option>
                        <option value="35">İzmir</option>
                        <option value="77">Yalova</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
                <div class="flex justify-center">
                    <input type="text" class="appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline w-full" placeholder="Alış Tarihi" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
                <div class="flex justify-center">
                    <div class="inline-block relative">
                        <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @for($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf("%02d", $i) }}">{{ sprintf("%02d", $i) }}</option>
                            @endfor
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="inline-block relative">
                        <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <input type="text" class="appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline w-full" placeholder="Teslim Tarihi" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
                <div class="flex justify-center">
                    <div class="inline-block relative">
                        <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @for($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf("%02d", $i) }}">{{ sprintf("%02d", $i) }}</option>
                            @endfor
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="inline-block relative">
                        <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="teslimsube" class="hidden">
                <div class="py-4 px-4 grid grid-cols-5 gap-4">
                    <div class="inline-block relative">
                        <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option selected disabled>Teslim Şubesi</option>
                            <option value="06">Ankara</option>
                            <option value="16">Bursa</option>
                            <option value="34">İstanbul</option>
                            <option value="35">İzmir</option>
                            <option value="77">Yalova</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 px-4 grid grid-cols-5 gap-4">
                <div class="text-gray-100">
                    <input type="checkbox" onchange="subeChecked()" id="subecheck"> Farklı bir şubede iade etmek istiyorum
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div class="flex justify-center">
                    <button class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded flex items-center">
                        <img src="{{ asset('svg/travel-car.svg') }}" alt="" class="h-8">
                        <div class="ml-2">Kirala</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
