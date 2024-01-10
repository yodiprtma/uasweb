@extends('layout.master')

@section('title', 'Tampilkan makanan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/sparepart') }}">makanan</a></li>
    <li class="breadcrumb-item active">Tampilkan</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">Tampilkan</div>
            <div class="card-body">
                  <div class="card-body">
                  <p class="card-text">No Makanan   : {{ $datamakanan->id }}</p>
                  <p class="card-text">Nama     : {{ $datamakanan->nama }}</p>
                  <p class="card-text">Harga Satuan           : {{ $datamakanan->harga }}</p>
                  <p class="card-text">Jenis makanan            : {{ $datamakanan->jenismakanan->nama }}</p>
                </div>
            </div>
                  <a class="btn btn-sm btn-success" href="{{ url('/makanan/') }}">Kembali</a>
                  
              </hr>
            </div>
          </div>
@endsection