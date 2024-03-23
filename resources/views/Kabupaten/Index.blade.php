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
    <h1 class="text-3xl font-bold underline">Kelola Kabupaten</h1>

    <div class="my-8">
        <h2 class="text-xl font-semibold mb-4">Tambah Kabupaten</h2>

        <form action="/kabupaten/store" method="post" class="mb-8">
            @csrf
            <div class="mb-4">
                <label for="kabupaten" class="block font-semibold mb-1">Nama Kabupaten:</label>
                <input type="text" id="kabupaten" name="kabupaten"
                    class="border border-gray-300 rounded-lg px-4 py-2 w-full" placeholder="Masukan Nama Kabupaten">
            </div>

            <div class="mb-4">
                <label for="provinsi" class="block font-semibold mb-1">Provinsi:</label>
                <select name="id_provinsi" id="provinsi" class="border border-gray-300 rounded-lg px-4 py-2 w-full">
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->provinsi }}</option>
                    @endforeach
                </select>
                <p>Jika provinsi tidak ada silahkan buat dulu <a href={{ route('provinsi') }}>data provinsi!!!</a></p>
            </div>

            <button type="submit" class="bg-red-400 text-white rounded-lg px-4 py-2">Tambah</button>
        </form>
    </div>

    <!-- Bagian Daftar Kabupaten -->
    <div class="my-8">
        <h2 class="text-xl font-semibold mb-4">Daftar Kabupaten</h2>

        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-100 text-left">Nama Kabupaten</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">Provinsi</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kabupatens as $kabupaten)
                    <tr class="border-b border-gray-200">
                        <td class="py-2 px-4">{{ $kabupaten->kabupaten }}</td>
                        <td class="py-2 px-4">{{ $kabupaten->provinsi->provinsi }}</td>
                        <td class="py-2 px-4">
                            <a href="/kabupaten/{{ $kabupaten->id }}/edit"
                                class="text-blue-500 hover:underline mr-2">Edit</a>
                            <form action="/kabupaten/{{ $kabupaten->id }}" method="post" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        console.log();
    </script>
@endsection
