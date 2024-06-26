@extends('layout.app')

@section('container')
    <div class="max-w mx-auto bg-white p-8 mt-10 rounded-lg shadow-md">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="text-2xl font-bold mb-6">Input Data Penduduk</h1>
        <form action="{{ route('penduduk.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Penduduk:</label>
                <input type="text" id="nama" name="nama"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan nama penduduk">
            </div>
            <div class="mb-4">
                <label for="NIK" class="block text-gray-700 font-semibold mb-2">NIK (Nomor Induk Kependudukan):</label>
                <input type="text" id="NIK" name="NIK"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Masukkan NIK">
            </div>
            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-gray-700 font-semibold mb-2">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
            </div>
            <label for="provinsi" class="block text-gray-700 font-semibold mb-2">Provinsi:</label>
            <select id="provinsi" name="provinsi"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                onchange="updateAlamat()">
                <option value="">Pilih Provinsi</option>
                @foreach ($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}">{{ $provinsi->provinsi }}</option>
                @endforeach
            </select>
            <div class="mb-4">
                <label for="kabupaten" class="block text-gray-700 font-semibold mb-2">Kabupaten:</label>
                <select id="kabupaten" name="kabupaten"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    onchange="updateAlamat()">
                    <option value="" data-provinsi="">Pilih Kabupaten</option>
                    @foreach ($kabupatens as $kabupaten)
                        <option value="{{ $kabupaten->kabupaten }}" data-provinsi="{{ $kabupaten->id_provinsi }}">
                            {{ $kabupaten->kabupaten }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat:</label>
                <input type="text" id="alamat" name="alamat"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Masukan alamat">
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700 font-semibold mb-2">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
        </form>
    </div>

    <script>
        function updateAlamat() {
            let selectedProvinsi = document.getElementById('provinsi').selectedOptions[0];
            let idSelectedProvinsi = selectedProvinsi.value;
            let namaSelectedProvinsi = selectedProvinsi.innerText;

            let kabupatenOptions = document.getElementById('kabupaten').getElementsByTagName('option');
            let kabupaten = document.getElementById('kabupaten').value;

            for (let i = 0; i < kabupatenOptions.length; i++) {
                kabupatenOptions[i].style.display = 'none';
            }

            for (let i = 0; i < kabupatenOptions.length; i++) {
                if (kabupatenOptions[i].getAttribute('data-provinsi') === idSelectedProvinsi || kabupatenOptions[i]
                    .getAttribute('data-provinsi') === '') {
                    kabupatenOptions[i].style.display = 'block';
                }
            }

            let alamat = namaSelectedProvinsi + ', ' + kabupaten;
            document.getElementById('alamat').value = alamat;
        }
    </script>

@endsection
