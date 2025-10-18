@extends('layouts.app')

@section('title', 'Desa CIMAHI')

@section('content')

{{-- ==== CAROUSEL ==== --}}
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
        @foreach ($carousels->chunk(3) as $key => $chunk)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="row">
                    @foreach ($chunk as $carousel)
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block w-100 carousel-img" alt="Carousel Image">
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- ==== BERITA ==== --}}
<div class="biru p-4 mt-5">
    <h5 class="text-center text-white"><b>BERITA TERKINI DESA CIMAHI</b></h5>
</div>
<div class="container bg-white p-5 shadow">
    <h5>BERITA DESA</h5>
    <div class="bar"></div>
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
        @foreach ($beritas as $item)
            <div class="col">
                <div class="card border-0 hover-show shadow-sm">
                    <img src="{{ $item->getFirstMediaUrl('thumbnail') }}" class="card-img-top" alt="gambar berita">
                    <div class="card-body">
                        <p class="card-text">{{ $item->headline }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- ==== GALERI ==== --}}
<div class="biru p-4">
    <h5 class="text-center text-white"><b>GALERI DESA CIMAHI</b></h5>
</div>
<div class="container bg-white p-5 shadow">
    <h5>GALERI DESA</h5>
    <div class="bar"></div>
    <div class="row row-cols-1 row-cols-md-2 g-1 mt-2">
        @foreach ($galleries as $item)
            <div class="card border-0 location-listing">
                <img src="{{ $item->getFirstMediaUrl('gallery') }}" class="img-size" alt="gambar">
                <p class="location-title">{{ $item->name }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- ==== APARATUR ==== --}}
<div class="biru p-4">
    <h5 class="text-center text-white"><b>APARATUR DESA CIMAHI</b></h5>
</div>
<div class="container bg-white p-5 shadow">
    <h5>APARATUR DESA</h5>
    <div class="bar"></div>
    <div class="row row-cols-1 row-cols-md-6 g-4 mt-2">
        @foreach ($aparaturs as $item)
            <div class="col">
                <div class="card border-0">
                    <img src="{{ $item->getFirstMediaUrl('photo') }}" class="card-img-top" alt="gambar aparatur">
                    <div class="card-body text-center">
                        <p class="card-text fw-bold mb-0">{{ $item->name }}</p>
                        <small class="text-muted">{{ $item->jabatan }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@push('styles')
<style>
    .carousel .col-md-4 {
        padding: 5px;
    }

    .carousel-img {
        border-radius: 10px;
        height: 350px;
        object-fit: cover;
    }

    .bar {
        width: 250px;
        height: 7px;
        margin: 10px 0;
        border-radius: 5px;
        background-color: #424242;
        transition: width 0.2s;
    }

    .bar:hover {
        width: 330px;
    }
</style>
@endpush
