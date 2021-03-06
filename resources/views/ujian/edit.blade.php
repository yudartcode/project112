@extends('layout.main')

@section('title', 'Edit Data Ujian')
@section('content')
<section class="py-5">
    <div class="col-6 card-body shadow">
        <h3 class="title">Edit Data <span class="cl-theme">Ujian</span></h3>
        <div class="section-body">
            <form action="/ujian/{{$ujian->id}}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama_mk">Nama Matkul</label>
                    <input type="text" value="{{$ujian->nama_mk}}"
                        class="form-control @error('nama_mk') is-invalid @enderror" name="nama_mk" id="nama_mk"
                        aria-describedby="" placeholder="Web Service">
                    @error('nama_mk')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="dosen">Dosen</label>
                    <input type="text" value="{{$ujian->dosen}}"
                        class="form-control @error('dosen') is-invalid @enderror" name="dosen" id="dosen"
                        aria-describedby="" placeholder="Dr. Syudis">
                    @error('dosen')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_soal">Jumlah Soal</label>
                    <input type="number" value="{{$ujian->jumlah_soal}}"
                        class="form-control @error('jumlah_soal') is-invalid @enderror" name="jumlah_soal"
                        id="jumlah_soal" aria-describedby="" placeholder="10">
                    @error('jumlah_soal')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input value="{{$ujian->keterangan}}" class="form-control @error('keterangan') is-invalid @enderror"
                        name="keterangan" id="keterangan" aria-describedby="" placeholder="Keterangan">
                    @error('keterangan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="/ujian" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</section>
@endsection
