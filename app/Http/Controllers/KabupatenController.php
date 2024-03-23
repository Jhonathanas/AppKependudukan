<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index()
    {
        $kabupatens = Kabupaten::all();
        $provinsis = Provinsi::all();
        return view('kabupaten.index', compact('kabupatens' ,'provinsis'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'kabupaten' => 'required|string|max:255',
            'id_provinsi' => 'required|exists:provinsis,id'
        ]);

        Kabupaten::create($request->all());

        return redirect('/kabupaten');
    }

    public function edit($id)
    {
        $kabupaten = Kabupaten::findOrFail($id);
        $provinsis = Provinsi::all();
        return view('kabupaten.edit', compact('kabupaten', 'provinsis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kabupaten' => 'required|string|max:255',
            'id_provinsi' => 'required|exists:provinsis,id'
        ]);

        $kabupaten = Kabupaten::findOrFail($id);
        $kabupaten->update($request->all());

        return redirect('/kabupaten');
    }

    public function destroy($id)
    {
        $kabupaten = Kabupaten::findOrFail($id);
        $kabupaten->delete();

        return redirect('/kabupaten');
    }
}
