@extends('layout.app')

@section('container')
    <h1 class="text-3xl font-bold underline">Edit Kabupaten</h1>
    
    <form action="/kabupaten/{{ $kabupaten->id }}" method="post" class="my-8">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="kabupaten" class="block font-semibold mb-1">Nama Kabupaten:</label>
            <input type="text" id="kabupaten" name="kabupaten" value="{{ $kabupaten->kabupaten }}" class="border border-gray-300 rounded-lg px-4 py-2 w-full">
        </div>

        <div class="mb-4">
            <label for="provinsi" class="block font-semibold mb-1">Provinsi:</label>
            <select name="id_provinsi" id="provinsi" class="border border-gray-300 rounded-lg px-4 py-2 w-full">
                @foreach ($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}" {{ $provinsi->id == $kabupaten->id_provinsi ? 'selected' : '' }}>{{ $provinsi->provinsi }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-red-400 text-white rounded-lg px-4 py-2">Simpan Perubahan</button>
    </form>
@endsection
