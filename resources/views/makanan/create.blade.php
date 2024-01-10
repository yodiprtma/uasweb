
@extends('layout.master')

@section('title', 'Tambah makanan')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/makanan') }}">makanan</a></li>
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
                <h4 class="card-title">Form Tambah makanan</h4>
            </div>
        </div>
        <form action="{{ url('/makanan') }}" method="POST"> 
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label @error('nama') text-danger @enderror">Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                </div>
                <div>
                    <label class="form-label @error('harga') text-danger @enderror">Harga</label>
                    <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" value="{{old('harga')}}">
                    @error('harga')
                    <div class="invalid-feedback mb-2">{{$message }}</div?>
                        @enderror
                </div>
                <div>
                    <label class="form-label @error('jenismakanan') text-danger @enderror">Jenis Makanan</label>
                    <select class="form-select @error('jenismakanan') is-invalid @enderror" name="jenismakanan">
                        @foreach ($jenismakanan as $j)
                            <option value="{{ $j->id }}" {{old('jenismakanan') == $j->id ? 'selected' : ''}} >{{ $j->nama }}</option>
                        @endforeach
                        @error('jenismakanan')
                        <div class="invalid-feedback mb-2">{{$message }}</div?>
                            @enderror
                    </select>
                    </div>
                    <div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection