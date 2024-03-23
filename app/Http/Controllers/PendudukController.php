<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Exports\ExportPenduduk;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{

    public function home(Request $request)
    {
        $query = $request->input('query');
        $penduduks = Penduduk::where('nama', 'LIKE', "%$query%")->simplePaginate(10);
        return view('welcome', compact('penduduks'));
    }
    public function index()
    {
        $penduduks = Penduduk::all();
        $kabupatens = Kabupaten::all();
        $provinsis = Provinsi::all();
        return view('penduduk.index', compact('penduduks', 'kabupatens', 'provinsis'));
    }
    function export_excel(){
        return Excel::download(new ExportPenduduk, "penduduk.xlsx");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'NIK' => 'required|max:18',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
        ]);
        
        Penduduk::create($validatedData);
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'NIK' => 'required|max:18',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
        ]);

        $penduduk->update($validatedData);
        return redirect()->route('home');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->route('home');
    }
}
