<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Http\Request;

class PendudukController extends Controller
{

    public function home(Request $request)
    {
        $query = $request->input('query');
        $penduduks = Penduduk::where('nama', 'LIKE', "%$query%")->simplePaginate(5);
        return view('welcome', compact('penduduks'));
    }
    public function index()
    {
        $penduduks = Penduduk::all();
        $kabupatens = Kabupaten::all();
        $provinsis = Provinsi::all();
        return view('penduduk.index', compact('penduduks', 'kabupatens', 'provinsis'));
    }

    public function store(Request $request)
    {
        Penduduk::create($request->all());
        return redirect()->route('home');
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduk.show', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', compact('penduduk'));
    }

    public function update(Request $request, Penduduk $penduduk)
    {
        $penduduk->update($request->all());
        return redirect()->route('penduduk.index');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->route('penduduk.index');
    }
}
