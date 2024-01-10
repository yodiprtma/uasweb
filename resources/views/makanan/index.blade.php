@extends('layout.master')

@section('title', 'makanan')

@section('breadcrumb')
    <li class="breadcrumb-item active">Daftar makanan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Daftar Makanan</h4>
                </div>
                <div class="col-2">
                    @can('tambah-makanan')
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/makanan/create') }}">Tambah</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No Makanan</th>
                        <th scope="col">Nama Makanan</th>
                        <th scope="col">Jenis Makanan</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datamakanan as $bb)
                        <tr>
                            <td>{{ $bb->id }}</td>
                            <td>{{ $bb->nama }}</td>
                            <td>Rp. {{ $bb->harga }}</td>
                            <td>{{ $bb->jenismakanan->nama }}</td>
                            <td class="float-end">
                                @can('tambah-makanan')
                                <a class="btn btn-sm btn-warning"
                                    href="{{ url('/makanan/' . $bb->id . '/edit') }}">Ubah</a>
                                    <a class="btn btn-sm btn-info"
                                        href="{{ url('/makanan/' . $bb->id) }}">Lihat </a>

                                <form style="display: inline;" action="{{ url('/makanan/' . $bb->id) }}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endcan
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
