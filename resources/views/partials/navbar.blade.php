<div class="flex gap-10 p-10 px-32 bg-slate-600 ">
    <a class="bg-red-400 rounded-lg p-3 text-white hover:bg-red-600 transition duration-300 ease-in-out" href="{{ route('home') }}">Home</a>
    <a class="bg-red-400 rounded-lg p-3 text-white hover:bg-red-600 transition duration-300 ease-in-out" href="{{ route('penduduk') }}">Tambah Data</a>
    <a class="bg-red-400 rounded-lg p-3 text-white hover:bg-red-600 transition duration-300 ease-in-out" href="{{ route('provinsi') }}">Pilih Provinsi</a>
    <a class="bg-red-400 rounded-lg p-3 text-white hover:bg-red-600 transition duration-300 ease-in-out" href="{{ route('kabupaten') }}">Pilih Kabupaten</a>
    <a class="bg-blue-400 rounded-lg p-3 text-white hover:bg-blue-600 transition duration-300 ease-in-out" href="{{ route('export') }}">Export KeExcel</a>
    <div class="relative">
        <form action="{{ route('home') }}" method="GET" class="relative">
            <input type="text" name="query" placeholder="Pencarian Nama" class="bg-gray-100 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500 transition duration-300 ease-in-out">
            <button type="submit" class="absolute top-0 right-0 mt-2 mr-3 text-gray-600 hover:text-gray-700 focus:outline-none transition duration-300 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a7 7 0 1 0-4.474 12.474A7 7 0 0 0 15 13zM9 9a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
            </button>
        </form>
        
    </div>
</div>
