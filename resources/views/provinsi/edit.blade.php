@extends('layout.app')

@section('container')
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="text-3xl font-bold mb-6">Edit Provinsi</h1>
    <form action="/provinsi/{{ $provinsi->id }}" method="post" class="mb-8">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="provinsi" class="block font-semibold mb-1">Nama Provinsi:</label>
            <input type="text" name="provinsi" value="{{ $provinsi->provinsi }}" placeholder="Nama Provinsi"
                class="border border-gray-300 rounded-lg px-4 py-2 w-full">
        </div>
        <button type="submit" class="bg-red-400 text-white rounded-lg px-4 py-2">Simpan Perubahan</button>
    </form>
@endsection
