@extends('layouts.app')

@section('title', 'Form Tiket')

@section('contents')
<form action="{{ isset($tiket) ?route('tiket.tambah.update',$tiket->id): route('tiket.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ isset($tiket)?'Update Data':'Update Data' }}</h6>
            </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_tiket">Kode Tiket</label>
                        <input type="text" class="form-control" id="kode_tiket" name="kode_tiket" value="{{ isset($tiket) ? $tiket->kode_tiket : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="judul_film">Judul Film</label>
                        <input type="text" class="form-control" id="judul_film" name="judul_film" value="{{ isset($tiket) ? $tiket->judul_film : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori_film">Kategori Film</label>
                        <input type="text" class="form-control" id="kategori_film" name="kategori_film" value="{{ isset($tiket) ? $tiket->kategori_film : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="nomor_kursi">Nomor Kursi</label>
                        <input type="text" class="form-control" id="nomor_kursi" name="nomor_kursi" value="{{ isset($tiket) ? $tiket->nomor_kursi : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tiket">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" value="{{ isset($tiket) ? $tiket->jumlah_tiket : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Tiket</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ isset($tiket) ? $tiket->harga : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit"  class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection