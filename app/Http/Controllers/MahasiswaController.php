<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index',[
            "mahasiswa" => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nim" => "required",
            "gambar" => "required|mimes:jpg,jpeg,png"
        ]);

        $mahasiswa = $request->all();

        if ($request->hasfile('gambar')){
            $image = $request->file('gambar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/image',$filename);
            $mahasiswa['gambar'] = $filename;
        }

        Mahasiswa::create($mahasiswa);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::where('id',$id)->first();

        return view('mahasiswa.edit',[
            "mahasiswa" => $mahasiswa
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama" => "required",
            "nim" => "required",
            "gambar" => "required|mimes:jpg,jpeg,png"
        ]);

        $mahasiswa = $request->all();

        $edit = Mahasiswa::where('id',$id)->first();

        if ($request->hasfile('gambar')){
            $image = $request->file('gambar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/image',$filename);
            $mahasiswa['gambar'] = $filename;
        }

        $edit->update($mahasiswa);

        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::where('id',$id)->delete();

        return redirect()->route('index');
    }
}
