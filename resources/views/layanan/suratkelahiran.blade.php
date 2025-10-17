@extends('layouts.app')

@section('title', 'Surat Kelahiran')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT KETERANGAN KELAHIRAN</h2>
    <h6 class="text-center text-muted">(Untuk Melengkapi Persyaratan Administrasi)</h6>
    <hr />
    <form class="row g-3" method="POST" action="{{ route('surat.store', 'surat-kelahiran') }}" enctype="multipart/form-data">
        @csrf
        

         <div class="col-sm-8">
            <label class="form-label">Nama ayah</label>
            <input name="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" required>
            @error('nama_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">tempat lahir ayah</label>
            <input name="tempat_lahir_ayah" type="text" class="form-control @error('tempat_lahir_ayah') is-invalid @enderror" required>
            @error('tempat_lahir_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">Tanggal Lahir ayah</label>
            <input name="tanggal_lahir_ayah"  class="form-control @error('tanggal_lahir_ayah') is-invalid @enderror" required>
            @error('tanggal_lahir_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">umur ayah</label>
            <input name="umur_ayah" type="text" class="form-control @error('umur_ayah') is-invalid @enderror" required>
            @error('umur_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">pekerjaan ayah</label>
            <input name="pekerjaan_ayah" type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" required>
            @error('pekerjaan_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-sm-8">
            <label class="form-label">alamat ayah</label>
            <input name="alamat_ayah" type="text" class="form-control @error('alamat_ayah') is-invalid @enderror" required>
            @error('alamat_ayah')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">Nama ibu</label>
            <input name="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" required>
            @error('nama_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">tempat lahir ibu</label>
            <input name="tempat_lahir_ibu" type="text" class="form-control @error('tempat_lahir_ibu') is-invalid @enderror" required>
            @error('tempat_lahir_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">Tanggal Lahir ibu</label>
            <input name="tanggal_lahir_ibu" class="form-control @error('tanggal_lahir_ibu') is-invalid @enderror" required>
            @error('tanggal_lahir_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">umur ibu</label>
            <input name="umur_ibu" type="text" class="form-control @error('umur_ibu') is-invalid @enderror" required>
            @error('umur_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">pekerjaan ibu</label>
            <input name="pekerjaan_ibu" type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" required>
            @error('pekerjaan_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-sm-8">
            <label class="form-label">alamat ibu</label>
            <input name="alamat_ibu" type="text" class="form-control @error('alamat_ibu') is-invalid @enderror" required>
            @error('alamat_ibu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">Nama anak</label>
            <input name="nama_anak" type="text" class="form-control @error('nama_anak') is-invalid @enderror" required>
            @error('nama_anak')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">tempat lahir anak</label>
            <input name="tempat_lahir_anak" type="text" class="form-control @error('tempat_lahir_anak) is-invalid @enderror" required>
            @error('tempat_lahir_anak')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">Tanggal Lahir anak</label>
            <input name="tanggal_lahir_anak" class="form-control @error('tanggal_lahir_anak') is-invalid @enderror" required>
            @error('tanggal_lahir_anak')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">umur anak</label>
            <input name="umur_anak" type="text" class="form-control @error('umur_anak') is-invalid @enderror" required>
            @error('umur_anak')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-8">
            <label class="form-label">anak ke</label>
            <input name="anak_ke" type="text" class="form-control @error('anak_ke') is-invalid @enderror" required>
            @error('anak_ke')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-sm-8">
            <label class="form-label">lahir Di</label>
            <input name="lahir_di" type="text" class="form-control @error('lahir_di') is-invalid @enderror" required>
            @error('lahir_di')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-sm-8">
            <label class="form-label">alamat anak</label>
            <input name="alamat_anak" type="text" class="form-control @error('alamat_anak') is-invalid @enderror" required>
            @error('alamat_anak')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-8 text-center mt-3">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
