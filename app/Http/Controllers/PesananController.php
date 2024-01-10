<?php

namespace App\Http\Controllers;


use App\Models\makanan;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;

class pesananController extends Controller
{

    public function index()
    {
        $pesanan = pesanan::with('makanan')->get();

        return view('pesanan.index', ['data' => $pesanan]);
    }

    public function create()
    {
        $makanan = makanan::all();
       
        return view('pesanan.create', ['makanan' => $makanan]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'makanan' => ['required', 'exists:makanan,id'],
            'jumlah' => 'required',

        ]);

       $pesanan = pesanan::create([
            'nama' => $validated['nama'],
            'makanan_id' => $validated['makanan'],
            'jumlah' => $validated['jumlah'],
        ]);

        return redirect(url('/pesanan'));
    }

    public function update(Request $request, pesanan $pesanan)
    {
        $pesanan->update([
            'nama' => $request->nama,
            'makanan_id' => $request->makanan,
            'jumlah' => $request->jumlah,
            
        ]);

        return redirect(url('/pesanan'));
    }

    public function edit(pesanan $pesanan)
    {
        $pesanan->load('makanan');

        $makanan = makanan::all();

        return view('pesanan.edit', ['data' => $pesanan, 'id' => $pesanan->id,'makanan' => $makanan]);
    }

    public function show(pesanan $pesanan)
    {
        $pesanan->load('makanan');

        $makanan = makanan::all();

        return view('pesanan.show', ['data' => $pesanan, 'id' => $pesanan->id,'makanan' => $makanan]);
    }
    public function destroy(pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect(url('/pesanan'));
}
}