@php
    $currentRouteName = Route::currentRouteName();
@endphp

@extends('layouts.app')

@section('content')
    <div class="container py-5" >
        <div>
            <h2 class="text-center"> <i class="bi bi-stack"></i> Selamat Datang Di masterBarangUts</h2><br>

            <div class="row" >
                <div class="col-6">
                    <a class="btn btn-dark" id="btn-index2" href="{{ route('barangs.index') }}" class="nav-link @if($currentRouteName == 'barang.index') active @endif">List Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 ">
                <img class="rounded mx-auto d-block" src="{{Vite::asset('resources/images/fotoprofile.jpg')}}" class="img-fluid" alt="Gambar" id="fprofile">
            </div>
            <div class="col-md-8"><br>
                <h2>Biodata</h2><br>
                <p ><strong> Nama:</strong> Johanes Abner Sebastian Diman</p>
                <p ><strong> Tempat,Tanggal lahir:</strong> Surabaya,10-Juli-2003</p>
                <p><strong>Umur:</strong> 19 tahun</p>
                <p><strong>Alamat:</strong> Jl. Sarpawisesa 50, Ujung, Kec. Semampir, Surabaya, Jawa Timur 60155</p>
            </div>
        </div>
    </div>
@endsection
