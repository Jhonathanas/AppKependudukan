@extends('layout.app')

@section('container')
    <h1 class="text-3xl font-bold underline mb-6">DATA PENDUDUK</h1>

    @if($penduduks->isEmpty())
        <h1 class="text-xl">Tidak ada data</h1>
    @else
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-100 text-left">Aksi</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">No</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">Nama</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">NIK</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">Tanggal Lahir</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">Alamat</th>
                    <th class="py-2 px-4 bg-gray-100 text-left">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduks as $penduduk)
                    <tr class="border-b border-gray-200">
                        <td class="py-2 px-4">
                            <a href="/penduduk/{{ $penduduk->id }}/edit" class="bg-blue-500 text-white px-3 py-1 rounded-md mr-2">Edit</a>
                            <form action="/penduduk/{{ $penduduk->id }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md">Hapus</button>
                            </form>
                        </td>
                        <td class="py-2 px-4">{{ $penduduk->id }}</td>
                        <td class="py-2 px-4">{{ $penduduk->nama }}</td>
                        <td class="py-2 px-4">{{ $penduduk->NIK }}</td>
                        <td class="py-2 px-4">{{ $penduduk->tanggal_lahir }}</td>
                        <td class="py-2 px-4">{{ $penduduk->alamat }}</td>
                        <td class="py-2 px-4">{{ $penduduk->jenis_kelamin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-8">
            {{ $penduduks->links() }}
        </div>
    @endif
@endsection
