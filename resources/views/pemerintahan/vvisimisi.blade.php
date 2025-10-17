@extends('layouts.app')

@section('title', 'Visi & Misi')

@section('content')
<div class="container bg-white mt-4 pt-3 pb-1 px-4 shadow-sm rounded">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-fill"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
        </ol>
    </nav>
</div>
<div class="container bg-white p-5 shadow-sm mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">VISI</h2>
    <p class="text-center">"Terciptanya Desa Cimahi Yang Mandiri, Aman, Sejahtera dan Religius "</p>
    <h2 class="text-center mt-5">MISI</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4 fs-5">
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">1</h5>
                    <p class="border border-2 p-4">Meningkatkan kemandirian masyarakat berbasis ekonomi melalui BUMDES, pariwisata, agri bisnis, dan industri dengan memperhatikan lingkungan.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">2</h5>
                    <p class="border border-2 p-4">Mewujudkan tata kelola pemerintahan yang amanah, bersih dan berwibawa dan transparan.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">3</h5>
                    <p class="border border-2 p-4">Optimasi pelayanan kepada masyarakat desa cimahi di semua bidang dan infrastruktur desa.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">4</h5>
                    <p class="border border-2 p-4">Meningkatkan iman dan taqwa</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">5</h5>
                    <p class="border border-2 p-4">Mewududkan partisipasi aktif masyarakat dalam perencanaan, pelaksanaan, evaluasi dan pemeliharaan pembangunan</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">6</h5>
                    <p class="border border-2 p-4">Mengembangkan intensifikasi pertanian dan perikanan</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">7</h5>
                    <p class="border border-2 p-4">Optimalisasi peran aktif LKD dalam pembangunan</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="border rounded-end d-inline-block p-4 bg-primary text-white">8</h5>
                    <p class="border border-2 p-4">Pembinaan terhadap kelompok-kelompok UMKM dan keterampilan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection