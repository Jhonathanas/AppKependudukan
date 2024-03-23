@extends('layout.app')

@section('container')
    <h1>Edit Data Penduduk</h1>
    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama Penduduk:</label><br>
            <input type="text" id="nama" name="nama" value="{{ $penduduk->nama }}">
        </div>
        <div>
            <label for="NIK">NIK (Nomor Induk Kependudukan):</label><br>
            <input type="text" id="NIK" name="NIK" value="{{ $penduduk->NIK }}">
        </div>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $penduduk->tanggal_lahir }}">
        </div>
        <div>
            <label for="alamat">Alamat:</label><br>
            <input type="text" id="alamat" name="alamat" value="{{ $penduduk->alamat }}">
        </div>
        <div>
            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="L" {{ $penduduk->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $penduduk->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <button type="submit">Simpan Perubahan</button>
    </form>
    
@endsection
