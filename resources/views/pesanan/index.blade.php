@extends('layout.master')

@section('title', 'pesanan')

@section('breadcrumb')
    <li class="breadcrumb-item active">Daftar pesanan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Daftar pesanan</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/pesanan/create') }}">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No Pesanan</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nama Makanan</th>
                        <th scope="col">Jenis Makanan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->makanan->nama}}</td>
                            <td>{{ $d->makanan->jenismakanan->nama}}</td>
                            <td>{{ $d->jumlah }}</td>
                            <td>{{ $d->makanan->harga }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/pesanan/' . $d->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                    href="{{ url('/pesanan/' . $d->id) }}">Lihat</a>
                                    
                                <form style="display: inline;" action="{{ url('/pesanan/' . $d->id) }}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
