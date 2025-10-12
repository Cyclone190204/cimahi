@extends('layouts.app')

@section('title', 'Surat Kelahiran')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT KETERANGAN KELAHIRAN</h2>
    <h6 class="text-center text-muted">(Untuk Melengkapi Persyaratan Administrasi)</h6>
    <hr />
    <form class="row g-3" method="POST" action="{{ route('surat.store', 'surat-kelahiran') }}" enctype="multipart/form-data">
        @csrf
        
       <div class="row mb-3s">
    <div class="col-sm-6">
        <label class="form-label">Hari</label>
        <input name="hari" type="text" class="form-control @error('hari') is-invalid @enderror" required>
        @error('hari')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-sm-6">
        <label class="form-label">Tanggal Kelahiran</label>
        <input name="tanggal_kelahiran" type="text" class="form-control @error('tanggal_kelahiran') is-invalid @enderror" required>
        @error('tanggal_kelahiran')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

<div class="col-sm-6">
    <label class="form-label">Jenis Kelamin Anak</label>
    <select name="jenis_kelamin_anak" class="form-select @error('jenis_kelamin_anak') is-invalid @enderror" required>
        <option value="l">Laki-laki</option>
        <option value="p">Perempuan</option>
    </select>
    @error('jenis_kelamin_anak')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="row mb-3">
    <div class="col-sm-6">
        <label class="form-label">Nama Anak</label>
        <input name="nama_anak" type="text" class="form-control @error('nama_anak') is-invalid @enderror" required>
        @error('nama_anak')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-sm-6">
        <label class="form-label">Anak Ke</label>
        <input name="anak_ke" type="text" class="form-control @error('anak_ke') is-invalid @enderror" required>
        @error('anak_ke')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

<hr>
<p class="text-center text-muted">BIODATA IBU :</p>

<div class="row mb-3">
    <div class="col-sm-6">
        <label class="form-label">Nama Ibu</label>
        <input name="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" required>
        @error('nama_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-sm-6">
        <label class="form-label">Istri Dari</label>
        <input name="istri_dari" type="text" class="form-control @error('istri_dari') is-invalid @enderror" required>
        @error('istri_dari')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-6">
        <label class="form-label">NIK Ibu</label>
        <input name="nik_ibu" type="text" class="form-control @error('nik_ibu') is-invalid @enderror" required>
        @error('nik_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-sm-6">
        <label class="form-label">Agama Ibu</label>
        <input name="agama_ibu" type="text" class="form-control @error('agama_ibu') is-invalid @enderror" required>
        @error('agama_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-6">
        <label class="form-label">Pekerjaan Ibu</label>
        <input name="pekerjaan_ibu" type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" required>
        @error('pekerjaan_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="col-sm-6">
        <label class="form-label">Alamat Ibu</label>
        <textarea name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" required></textarea>
        @error('alamat_ibu')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-6">
    <label class="form-label">Tanggal Pengajuan</label>
    <input name="tanggal_pengajuan" type="text" class="form-control @error('tanggal_pengajuan') is-invalid @enderror" required>
    @error('tanggal_pengajuan')
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
