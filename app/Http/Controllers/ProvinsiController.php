<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $provinsis = Provinsi::all();
        return view('provinsi.index', compact('provinsis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'provinsi' => 'required|string|max:255',
        ]);

        Provinsi::create($request->all());

        return redirect('/provinsi');
    }

    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'provinsi' => 'required|string|max:255',
        ]);

        $provinsi = Provinsi::findOrFail($id);
        $provinsi->update($request->all());

        return redirect('/provinsi');
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        return redirect('/provinsi');
    }

    public function show(Provinsi $provinsi)
    {
        //
    }
}
