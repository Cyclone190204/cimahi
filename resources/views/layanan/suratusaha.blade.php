@extends('layouts.app')

@section('title', 'Surat Keterangan Usaha')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT KETERANGAN USAHA</h2>
    <hr />

    <form class="row g-2 d-flex justify-content-center align-items-center mt-4"
          method="POST"
          action="{{ route('surat.store', 'surat-usaha') }}">
        @csrf

        {{-- NIK --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">NIK (Nomor Induk Kependudukan)</label>
                <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" required>
                @error('nik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Nama --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-8">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                <option value="l" selected>Laki-laki</option>
                <option value="p">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Tempat & Tanggal Lahir --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-6">
                <label class="form-label">Tempat Lahir</label>
                <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
                @error('tempat_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-2">
                <label class="form-label">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
                @error('tanggal_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Agama --}}
        <div class="row justify-content-md-center mb-2">
            <div class="col-sm-8">
                <label class="form-label">Agama</label>
                <input name="agama" type="text" class="form-control @error('agama') is-invalid @enderror" required>
                @error('agama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Status Perkawinan --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Status Perkawinan</label>
                <input name="status" type="text" class="form-control @error('status_perkawinan') is-invalid @enderror" required>
                @error('status_perkawinan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Warga Negara --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Warga Negara</label>
                <input name="warga_negara" type="text" class="form-control @error('warga_negara') is-invalid @enderror" required>
                @error('warga_negara')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Pekerjaan --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Pekerjaan</label>
                <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" required>
                @error('pekerjaan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Jenis Usaha --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Jenis Usaha (Di bidang apa)</label>
                <textarea name="jenis_usaha" class="form-control @error('jenis_usaha') is-invalid @enderror"></textarea>
                @error('jenis_usaha')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Lokasi Usaha --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Lokasi Usaha</label>
                <textarea name="lokasi_usaha" class="form-control @error('lokasi_usaha') is-invalid @enderror"></textarea>
                @error('lokasi_usaha')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Alamat --}}
        <div class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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


        {{-- Melengkapi Persyaratan --}}
        < class="row justify-content-md-center mb-3">
            <div class="col-sm-8">
                <label class="form-label">Melengkapi Persyaratan</label>
                <textarea name="melengkapi_persyaratan" class="form-control @error('melengkapi_persyaratan') is-invalid @enderror"></textarea>
                @error('melengkapi_persyaratan')
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
