@extends('layouts.app')

@section('title', 'Desa CIMAHI')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
    </div>

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/gambar/fotbar1.jpeg" class="d-block w-100 rounded-4 shadow-sm" alt="gambar1">
                </div>
                <div class="col-md-4">
                    <img src="assets/gambar/kantor desa.jpg" class="d-block w-100 rounded-4 shadow-sm" alt="gambar2">
                </div>
                <div class="col-md-4">
                    <img src="assets/gambar/fotbar2.jpeg" class="d-block w-100 rounded-4 shadow-sm" alt="gambar3">
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/gambar/fotbar3.jpeg" class="d-block w-100 rounded-4 shadow-sm" alt="gambar4">
                </div>
                <div class="col-md-4">
                    <img src="assets/gambar/fotbar4.jpeg" class="d-block w-100 rounded-4 shadow-sm" alt="gambar5">
                </div>
                <div class="col-md-4">
                    <img src="assets/gambar/fotbar1.jpeg" class="d-block w-100 rounded-4 shadow-sm" alt="gambar6">
                </div>
            </div>
        </div>

    </div>

    <!-- Control -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

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
            <p class="location-title">{{ $item->name }} </p>
        </div>
        @endforeach
    </div>
</div>
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
                <img src="{{ $item->getFirstMediaUrl('photo') }}" class="card-img-top" alt="gambar berita">
                <div class="card-body">
                    <p class="card-text">{{ $item->name }}</p>
                    <p class="card-text">{{ $item->jabatan }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav> --}}
</div>
<div class="biru p-4">
    {{-- <h5 class="text-center text-white"><b>PETA DESA CIMAHI</b></h5>
</div>
<div class="bg-white">
    <iframe src="   "" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<style> --}}
    {{-- .bar {
        width: 250px;
        height: 7px;
        margin: 10px 00;
        border-radius: 5px;
        background-color: #424242;
        transition: width 0.2s; --}}
    {{-- } --}}

    {{-- .bar:hover {
        width: 330px;
    }
</style> --}}
@endsection