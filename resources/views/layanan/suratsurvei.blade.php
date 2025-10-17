@extends('layouts.app')

@section('title', 'Surat Berita Acara/Survei Lapangan')

@section('content')
<div class="container bg-white p-5 shadow mt-3 mb-5 rounded">
    <h2 class="text-center mt-3">SURAT BERITA ACARA PEMERIKSAAN/SURVEI LAPANGAN</h2>
    <hr />
    <form class="row g-3 d-flex justify-content-center align-items-center mt-4" method="POST" action="{{ route('surat.store', 'survey') }}">
        @csrf
        <div class="col-md-8">
            <label class="form-label">pada hari</label>
            <input name="pada_hari" type="text" class="form-control @error('pada_hari') is-invalid @enderror" required>
            @error('pada_hari')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">tanggal</label>
            <input name="tanggal" type="text" class="form-control @error('tanggal') is-invalid @enderror" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">bulan</label>
            <input name="bulan" type="text" class="form-control @error('bulan') is-invalid @enderror" required>
            @error('bulan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-8">
            <label class="form-label">tahun</label>
            <input name="tahun" type="text" class="form-control @error('tahun') is-invalid @enderror" required>
            @error('tahun')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <p class="text-center text-muted mt-4">Tim/Petugas Survei ke 1</p>
        <div class="col-md-6">
            <label class="form-label">nama ke 1</label>
            <input name="nama_ke_1" type="text" class="form-control @error('nama_ke_1') is-invalid @enderror" required>
            @error('nama_ke_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
         <div class="col-md-6">
            <label class="form-label">nik ke 1</label>
            <input name="nik_ke_1" type="text" class="form-control @error('nik_ke_1') is-invalid @enderror" required>
            @error('nik_ke_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">tempat lahir ke 1</label>
            <input name="tempat_lahir_ke_1" type="text" class="form-control @error('tempat_lahir_ke_1') is-invalid @enderror" required>
            @error('tempat_lahir_ke_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       <div class="col-md-6">
            <label class="form-label">tanggal lahir ke 1</label>
            <input name="tanggal_lahir_ke_1" type="text" class="form-control @error('tanggal_lahir_ke_1') is-invalid @enderror" required>
            @error('tanggal_lahir_ke_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-md-6">
            <label class="form-label">status ke 1</label>
            <input name="status_ke_1" type="text" class="form-control @error('status_ke_1') is-invalid @enderror" required>
            @error('status_ke_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-6">
            <label class="form-label"> Jenis Kelamin ke 1</label>
            <input name="jenis_kelamin_ke_1" type="text" class="form-control @error('jenis_kelamin_ke_1') is-invalid @enderror" required>
            @error('jenis_kelamin_ke_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <p class="text-center text-muted mt-4">Tim/Petugas Survei ke 2</p>
         <div class="col-md-6">
            <label class="form-label">nama ke 2</label>
            <input name="nama_ke_2" type="text" class="form-control @error('nama_ke_2') is-invalid @enderror" required>
            @error('nama_ke_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        

         <div class="col-md-6">
            <label class="form-label">nik ke 2</label>
            <input name="nik_ke_2" type="text" class="form-control @error('nik_ke_2') is-invalid @enderror" required>
            @error('nik_ke_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">tempat lahir ke 2</label>
            <input name="tempat_lahir_ke_2" type="text" class="form-control @error('tempat_lahir_ke_2') is-invalid @enderror" required>
            @error('tempat_lahir_ke_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       <div class="col-md-6">
            <label class="form-label">tanggal lahir ke 2</label>
            <input name="tanggal_lahir_ke_2" type="text" class="form-control @error('tanggal_lahir_ke_2') is-invalid @enderror" required>
            @error('tanggal_lahir_ke_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-md-6">
            <label class="form-label">status ke 2</label>
            <input name="status_ke_2" type="text" class="form-control @error('status_ke_2') is-invalid @enderror" required>
            @error('status_ke_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-6">
            <label class="form-label"> Jenis Kelamin ke 2</label>
            <input name="jenis_kelamin_ke_2" type="text" class="form-control @error('jenis_kelamin_ke_2') is-invalid @enderror" required>
            @error('jenis_kelamin_ke_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
         <p class="text-center text-muted mt-4">Tim/Petugas Survei ke 3</p>
         <div class="col-md-6">
            <label class="form-label">nama ke 3</label>
            <input name="nama_ke_3" type="text" class="form-control @error('nama_ke_3') is-invalid @enderror" required>
            @error('nama_ke_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        

         <div class="col-md-6">
            <label class="form-label">nik ke 3</label>
            <input name="nik_ke_3" type="text" class="form-control @error('nik_ke_3') is-invalid @enderror" required>
            @error('nik_ke_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">tempat lahir ke 3</label>
            <input name="tempat_lahir_ke_3" type="text" class="form-control @error('tempat_lahir_ke_3') is-invalid @enderror" required>
            @error('tempat_lahir_ke_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       <div class="col-md-6">
            <label class="form-label">tanggal lahir ke 3</label>
            <input name="tanggal_lahir_ke_3" type="text" class="form-control @error('tanggal_lahir_ke_3') is-invalid @enderror" required>
            @error('tanggal_lahir_ke_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-md-6">
            <label class="form-label">status ke 3</label>
            <input name="status_ke_3" type="text" class="form-control @error('status_ke_3') is-invalid @enderror" required>
            @error('status_ke_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-6">
            <label class="form-label"> Jenis Kelamin ke 3</label>
            <input name="jenis_kelamin_ke_3" type="text" class="form-control @error('jenis_kelamin_ke_3') is-invalid @enderror" required>
            @error('jenis_kelamin_ke_3')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <p class="text-center text-muted mt-4">Tim/Petugas Survei ke 4<p>
         <div class="col-md-6">
            <label class="form-label">nama ke 4</label>
            <input name="nama_ke_4" type="text" class="form-control @error('nama_ke_4') is-invalid @enderror" required>
            @error('nama_ke_4')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
         <div class="col-md-6">
            <label class="form-label">nik ke 4</label>
            <input name="nik_ke_4" type="text" class="form-control @error('nik_ke_4') is-invalid @enderror" required>
            @error('nik_ke_4')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">tempat lahir ke 4</label>
            <input name="tempat_lahir_ke_4" type="text" class="form-control @error('tempat_lahir_ke_4') is-invalid @enderror" required>
            @error('tempat_lahir_ke_4')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       <div class="col-md-6">
            <label class="form-label">tanggal lahir ke 4</label>
            <input name="tanggal_lahir_ke_4" type="text" class="form-control @error('tanggal_lahir_ke_4') is-invalid @enderror" required>
            @error('tanggal_lahir_ke_4')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-md-6">
            <label class="form-label">status ke 4</label>
            <input name="status_ke_4" type="text" class="form-control @error('status_ke_4') is-invalid @enderror" required>
            @error('status_ke_4')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-6">
            <label class="form-label"> Jenis Kelamin ke 4</label>
            <input name="jenis_kelamin_ke_4" type="text" class="form-control @error('jenis_kelamin_ke_4') is-invalid @enderror" required>
            @error('jenis_kelamin_ke_4')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <p class="text-center text-muted mt-4">Tim/Petugas Survei ke 5<p>
         <div class="col-md-6">
            <label class="form-label">nama ke 5</label>
            <input name="nama_ke_5" type="text" class="form-control @error('nama_ke_5') is-invalid @enderror" required>
            @error('nama_ke_5')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        

         <div class="col-md-6">
            <label class="form-label">nik ke 5</label>
            <input name="nik_ke_5" type="text" class="form-control @error('nik_ke_5') is-invalid @enderror" required>
            @error('nik_ke_5')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">tempat lahir ke 5</label>
            <input name="tempat_lahir_ke_5" type="text" class="form-control @error('tempat_lahir_ke_5') is-invalid @enderror" required>
            @error('tempat_lahir_ke_5')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       <div class="col-md-6">
            <label class="form-label">tanggal lahir ke 5</label>
            <input name="tanggal_lahir_ke_5" type="text" class="form-control @error('tanggal_lahir_ke_5') is-invalid @enderror" required>
            @error('tanggal_lahir_ke_5')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-md-6">
            <label class="form-label">status ke 5</label>
            <input name="status_ke_5" type="text" class="form-control @error('status_ke_5') is-invalid @enderror" required>
            @error('status_ke_5')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="col-sm-6">
            <label class="form-label"> Jenis Kelamin ke 5</label>
            <input name="jenis_kelamin_ke_5" type="text" class="form-control @error('jenis_kelamin_ke_5') is-invalid @enderror" required>
            @error('jenis_kelamin_ke_5')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-8 text-center">
            <button class="btn btn-success" type="submit">Submit Form</button>
        </div>
    </form>
</div>
@endsection
