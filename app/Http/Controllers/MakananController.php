<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jenismakanan;
use App\Models\makanan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;

class makananController extends Controller
{

    public function index()
    {
        $makanan = makanan::with('jenismakanan')->get();

        return view('makanan.index', ['datamakanan' => $makanan]);
    }

    public function create()
    {
        $jenismakanan = jenismakanan::all();
       
        return view('makanan.create', ['jenismakanan' => $jenismakanan]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenismakanan' => ['required', 'exists:jenismakanan,id'],

        ]);


       $makanan = makanan::create([
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'jenismakanan_id' => $validated['jenismakanan'],
        ]);

        return redirect(url('/makanan'));
    }

    public function update(Request $request, makanan $makanan)
    {
        $makanan->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenismakanan_id' => $request->jenismakanan,
        ]);

        return redirect(url('/makanan'));
    }

    public function edit(makanan $makanan)
    {
        $makanan->load('jenismakanan');
        $jenismakanan = jenismakanan::all();

        return view('makanan.edit', ['datamakanan' => $makanan, 'id' => $makanan->id,'jenismakanan' => $jenismakanan]);
    }

    public function show(makanan $makanan)
    {
        $makanan->load('jenismakanan');


        $jenismakanan = jenismakanan::all();

        return view('makanan.show', ['datamakanan' => $makanan, 'id' => $makanan->id,'jenismakanan' => $jenismakanan]);
    }
    public function destroy(makanan $makanan)
    {
        $makanan->delete();

        return redirect(url('/makanan'));
}
}