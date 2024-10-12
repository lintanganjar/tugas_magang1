@extends('components.layout')
@section('sidebar')
<li class="active h-12 rounded-[48px_0_0_48px] relative bg-transparent ml-1.5 p-1">
    <a href="#" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-dashboard min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
        <span class="text">Dashboard</span>
    </a>
</li>
@endsection
@section('content')
<div class="md:p-4 p-2">
    <p class="mb-5 md:text-[20px] text-[19px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Edit Data Mahasiswa</p>

<form action="{{ route('mahasiswa.sendRequest') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label for="nama" class="md:text-[15px] text-sm">Nama</label>
        <input type="text" id="nama" name="nama" value="{{ $mahasiswadatapribadi->name }}" class="block w-full p-1.5 md:p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 md:text-[15px] text-sm bg-gray-50" required>
    </div>
    
    <div class="mb-4">
        <label for="nim" class="md:text-[15px] text-sml">NIM</label>
        <input type="text" id="nim" name="nim" value="{{ $mahasiswadatapribadi->nim }}" class="block w-full p-1.5 md:p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 md:text-[15px] text-sm bg-gray-50" required>
    </div>
    <div class="mb-4">
        <label for="keterangan" class="md:text-[15px] text-sm">Keterangan</label>
        <textarea id="keterangan" name="keterangan" class="block w-full px-1.5 py-2  md:p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 md:text-[15px] text-sm bg-gray-50" placeholder="Alasan perubahan data " required></textarea>
    </div>

    <div class="grid grid-flow-row gap-4 mt-8 md:flex  md:justify-end md:space-x-4">
        <button type="submit" class="md:px-4 py-[10px] md:py-2 block  text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none  focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm  text-center">
            Kirim request
        </button>
        <a href="{{ route('mahasiswa.index') }}">
            <button type="button" class="md:py-2 py-[7px] block w-full md:px-4 text-sm font-medium text-gray-900 focus:outline-none bg-gray-100 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                Batal
            </button>
        </a>
    </div>
</form>
</div>

@endsection
