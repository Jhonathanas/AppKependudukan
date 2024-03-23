@extends('layout.app')

@section('container')
    <form action="/provinsi/store" method="post" class="mb-8">
        @csrf
        <input type="text" name="provinsi" placeholder="Nama Provinsi" class="border border-gray-300 rounded-lg px-4 py-2 mr-2">
        <button type="submit" class="bg-red-400 text-white rounded-lg px-4 py-2">Tambah Provinsi</button>
    </form>
    
    <table class="w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nama Provinsi</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($provinsis as $provinsi)
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-2">{{ $provinsi->provinsi }}</td>
                    <td class="px-4 py-2">
                        <a href="/provinsi/{{ $provinsi->id }}/edit" class="text-blue-500 hover:underline mr-2">Edit</a>
                        <form action="/provinsi/{{ $provinsi->id }}" method="post" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        console.log({!! json_encode($provinsis) !!});
    </script>
@endsection
