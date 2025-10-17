@extends('layouts.app')

@section('title', 'Surat Domisili')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT DOMISILI</h2>
    <h6 class="text-center text-muted">(Untuk Melengkapi Persyaratan Administrasi)</h6>
    <hr />
    <form class="row g-3 d-flex justify-content-center align-items-center mt-4" 
          method="POST" 
          action="{{ route('surat.store', 'surat-domisili') }}" 
          enctype="multipart/form-data">
        @csrf

        {{-- NIK --}}
        <div class="col-md-8">
            <label class="form-label">NIK</label>
            <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" required>
            @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Nama --}}
        <div class="col-md-8">
            <label class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Jenis Kelamin --}}
        <div class="col-md-8">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                <option value="Laki-Laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Tempat Lahir --}}
        <div class="col-md-8">
            <label class="form-label">Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
            @error('tempat_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Tanggal Lahir --}}
         <div class="col-md-8">
            <label class="form-label">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
            @error('tanggal_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        {{-- Kewarganegaraan --}}
        <div class="col-md-8">
            <label class="form-label">Kewarganegaraan</label>
            <input name="kewarganegaraan" type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" required>
            @error('kewarganegaraan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Agama --}}
        <div class="col-md-8">
            <label class="form-label">Agama</label>
            <input name="agama" type="text" class="form-control @error('agama') is-invalid @enderror" required>
            @error('agama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Pekerjaan --}}
        <div class="col-md-8">
            <label class="form-label">Pekerjaan</label>
            <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" required>
            @error('pekerjaan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Alamat --}}
       <div class="col-md-8">
            <label class="form-label">alamat</label>
            <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" required>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- RT --}}
        <div class="col-md-8">
            <label class="form-label">RT</label>
            <input name="rt" type="text" class="form-control @error('rt') is-invalid @enderror" required>
            @error('rt')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- RW --}}
        <div class="col-md-8">
            <label class="form-label">RW</label>
            <input name="rw" type="text" class="form-control @error('rw') is-invalid @enderror" required>
            @error('rw')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


         <div class="col-md-8">
            <label class="form-label">Alamat</label>
            <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" required>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-8 text-center mt-3">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
