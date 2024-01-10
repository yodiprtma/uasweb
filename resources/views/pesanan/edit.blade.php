@extends('layout.master')

@section('title', 'Ubah rental')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/pesanan') }}">Pesanan</a></li>
    <li class="breadcrumb-item active">Ubah</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Ubah Pesanan</h4>
            </div>
        </div>
        <form action="{{ url('/pesanan/' . $id) }}" method="POST">
            <div class="card-body">
            @csrf
            @method('PUT')
            <div>
                <label class="form-label @error('nama') text-danger @enderror">Nama</label>
                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{$data->nama}}">
                @error('nama')
                <div class="invalid-feedback mb-2">{{$message }}</div?>
                    @enderror
            </div>
            <div>
                <label class="form-label @error('makanan') text-danger @enderror">PIlih Makanan</label>
                    <select class="form-select @error('makanan') is-invalid @enderror" name="makanan">
                        @foreach ($makanan as $m)
                            <option value="{{ $m->id }}" {{old('makanan') == $m->id ? 'selected' : '' }}>{{ $m->nama }}</option>
                        @endforeach
                    @error('makanan')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                    </select>
                </div>
                <div>
                    <label class="form-label @error('jumlah') text-danger @enderror">Jumlah</label>
                <input class="form-control @error('jumlah') is-invalid @enderror" type="text" name="jumlah" value="{{$data->jumlah}}">
                @error('jumlah')
                <div class="invalid-feedback mb-2">{{$message }}</div?>
                    @enderror
            </div>
            <div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
