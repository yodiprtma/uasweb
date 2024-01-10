
@extends('layout.master')

@section('title', 'Tambah pesanan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/pesanan') }}">pesanan</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Form Tambah Pesanan</h4>
            </div>
        </div>
        <form action="{{ url('/pesanan') }}" method="POST"> 
            <div class="card-body">
                @csrf
                </div>
                <div>
                    <label class="form-label @error('nama') text-danger @enderror">Nama Pemesan</label>
                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback mb-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label @error('makanan') text-danger @enderror">PIlih Makanan</label>
                    <select class="form-select @error('makanan') is-invalid @enderror" name="makanan">
                        @foreach ($makanan as $m)
                            <option value="{{ $m->id }}" {{old('makanan') == $m->id ? 'selected' : '' }}>{{ $m->nama }}</option>
                        @endforeach
                    </select>
                    @error('makanan')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('jumlah') text-danger @enderror">Jumlah</label>
                    <input class="form-control @error('jumlah') is-invalid @enderror" type="text" name="jumlah" value="{{old('jumlah')}}">
                    @error('jumlah')
                    <div class="invalid-feedback mb-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                    </div>  
            <div class="card-footer">
                <button type="submit" href="{{ url('/') }}" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection