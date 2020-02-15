@extends('layouts.app')

@section('content')
    <div class="py-24 q-res-bg bg-cover bg-center">
        <div class="mx-auto border border-red-500 bg-red-500 w-5/6 h-32">
            <div class="py-4 px-4 grid grid-cols-5 gap-4">
                {{-- TODO Veritabanı bağlantılarını yap,şehirleri veritabanınıdan çek --}}
                <div class="inline-block relative w-64">
                    <select class="appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
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
                <div>
                    <input type="date">
                </div>
            </div>
        </div>
    </div>
@endsection
