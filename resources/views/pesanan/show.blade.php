@extends('layout.master')

@section('title', 'Tampilkan motor')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/pesanan') }}">Pesanan</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Data Pesanan</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">No Pesanan       : {{ $data->id }}</p>
                  <p class="card-text">Nama Penyewa     : {{ $data->nama }}</p>
                  <p class="card-text">Makanan            : {{ $data->makanan->nama }}</p>
                  <p class="card-text">Jumlah   : {{ $data->jumlah }}</p>
                  <p class="card-text">harga Satuan  : {{ $data->makanan->harga }}</p>
                </div>
            </div>
                  <a class="btn btn-sm btn-success" href="{{ url('/pesanan/') }}">Kembali</a>
                  
              </hr>
            </div>
          </div>
@endsection