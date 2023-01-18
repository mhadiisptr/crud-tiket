@extends('layouts.app')

@section('title', 'Data Penjualan Tiket')

@section('contents')
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tiket Pengujung</h6>
                        </div>
                        <div class="card-body">
                        <a href="{{ route('tiket.tambah') }}" class="btn btn-primary mb-3">Tambah Tiket</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Tiket</th>
                                            <th>Judul Film</th>
                                            <th>Kategori Film</th>
                                            <th>Nomor Kursi</th>
                                            <th>Jumlah Tiket</th>
                                            <th>Harga Tiket</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no = 1)
                                        @foreach ($tiket as $row )
                                        <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->kode_tiket }}</td>
                                        <td>{{ $row->judul_film}}</td>
                                        <td>{{ $row->kategori_film}}</td>
                                        <td>{{ $row->nomor_kursi}}</td>
                                        <td>{{ $row->jumlah_tiket }}</td>
                                        <td>{{ $row->harga }}</td>
                                        <td>
                                            <a href="{{ route('tiket.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('tiket.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                        </tr>    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection