@extends('layouts.app')

@section('title', 'Surat Keterangan Tidak Mampu')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT KETERANGAN TIDAK MAMPU</h2>
    <h6 class="text-center text-muted">(Untuk Melengkapi Persyaratan Administrasi)</h6>
    <hr />

    <form class="row g-2 d-flex justify-content-center align-items-center mt-4"
          method="POST"
          action="{{ route('surat.store', 'surat-keterangan-tidak-mampu') }}">
        @csrf

        {{-- NIK --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">NIK (Nomor Induk Kependudukan)</label>
                <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" required>
                @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- NKK --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">NKK (Nomor Kartu Keluarga)</label>
                <input name="nkk" type="text" class="form-control @error('nkk') is-invalid @enderror" required>
                @error('nkk') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Nama --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Nama Lengkap</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" required>
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Agama --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Agama</label>
                <input name="agama" type="text" class="form-control @error('agama') is-invalid @enderror" required>
                @error('agama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Tempat & Tanggal Lahir --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-6">
                <label class="form-label">Tempat Lahir</label>
                <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                @error('tempat_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-sm-2">
                <label class="form-label">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                @error('tanggal_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Jenis Kelamin & Pekerjaan --}}
        <div class="row justify-content-md-center mb-8">
            <div class="col-sm-8">
                <label class="form-label">Jenis Kelamin</label>
                <input name="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-sm-8">
                <label class="form-label">Pekerjaan</label>
                <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" required>
                @error('pekerjaan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Alamat --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Nama Kampung</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- rt --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-md-8">
                <label class="form-label">RT</label>
                <input name="rt" type="text" class="form-control @error('rt') is-invalid @enderror">
                @error('rt') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- rw --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-md-8">
                <label class="form-label">RW</label>
                <input name="rw" type="text" class="form-control @error('rw') is-invalid @enderror">
                @error('rw') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Melengkapi Persyaratan Untuk --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-md-8">
                <label class="form-label">Melengkapi Persyaratan Untuk</label>
                <input name="melengkapi_persyaratan_untuk" type="text" class="form-control @error('melengkapi_persyaratan_untuk') is-invalid @enderror">
                @error('melengkapi_persyaratan_untuk') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Warga Negara --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-md-8">
                <label class="form-label">Warga Negara</label>
                <input name="kewarganegaraan" type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror">
                @error('kewarganegaraan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        {{-- Status --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-md-8">
                <label class="form-label">Status</label>
                <input name="status" type="text" class="form-control @error('status') is-invalid @enderror">
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
       </div>
        <div class="col-md-8 text-center mt-3">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection

