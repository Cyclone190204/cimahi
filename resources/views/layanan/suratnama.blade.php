@extends('layouts.app')

@section('title', 'Surat Beda Nama')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT BEDA NAMA</h2>
    <h6 class="text-center text-muted">(Untuk Melengkapi Persyaratan Administrasi)</h6>
    <hr />
    <form class="row g-3 justify-content-center mt-4" method="POST" action="{{ route('surat.store', 'surat-beda-nama') }}" enctype="multipart/form-data">
        @csrf
        
        {{-- Data Diri --}}
        <div class="col-md-8">
            <label class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-8">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                <option value="Laki-Laki" selected>Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-8">
            <label class="form-label">Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
            @error('tempat_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
            @error('tanggal_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-8">
            <label class="form-label">Warga negara</label>
            <input name="warga_negara" type="text" class="form-control @error('warga_negara') is-invalid @enderror" required>
            @error('warga_negara')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-8">
            <label class="form-label">Pekerjaan</label>
            <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror">
            @error('pekerjaan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-8">
            <label class="form-label">Agama</label>
            <input name="agama" type="text" class="form-control @error('agama') is-invalid @enderror" required>
            @error('agama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="col-md-8">
            <label class="form-label">Status Perkawinan</label>
            <input name="status" type="text" class="form-control @error('status') is-invalid @enderror" required>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">NIK</label>
            <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" required>
            @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">Kampung</label>
            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">RT</label>
            <textarea name="rt" class="form-control @error('rt') is-invalid @enderror"></textarea>
            @error('rt')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">RW</label>
            <textarea name="rw" class="form-control @error('rw') is-invalid @enderror"></textarea>
            @error('rw')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Keterangan Perbedaan Nama --}}
        <p class="text-center text-muted mt-4">(DalamNama tersebut di atas adalah benar Warga Desa Cimahi Kecamatan Cicantayan Kabupaten Sukabumi, 
            yang mempunyai Perbedaan Nama Sebagai Berikut) </p>
            <hr />
        
        <div class="col-md-8">
            <label class="form-label">Nama Di KTP</label>
            <input name="nama_ktp" type="text" class="form-control @error('nama_ktp') is-invalid @enderror" required>
            @error('nama_ktp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">Nama Di KK</label>
            <input name="nama_kk" type="text" class="form-control @error('nama_kk') is-invalid @enderror" required>
            @error('nama_kk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">Nama Di BUKU NIKAH</label>
            <input name="nama_buku_nikah" type="text" class="form-control @error('nama_buku_nikah') is-invalid @enderror" required>
            @error('nama_buku_nikah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="col-md-8 text-center mt-3">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
