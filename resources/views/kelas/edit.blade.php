
@extends('components.layout')
@vite(['resources/css/app.css','resources/js/app.js'])
@section('sidebar')
<li class="active h-12 rounded-[48px_0_0_48px] relative bg-transparent ml-1.5 p-1">
    <a href="{{ route('kaprodi.index') }}" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-dashboard min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
        <span class="text">Dashboard</span>
    </a>
</li>
@endsection
@section('content')
<div class="bg-white p-3">
    
    <p  class="mb-5 text-[20px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Edit Kelas</p>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="nama_kelas" class="block mb-2.5 text-[15px]">Nama Kelas</label>
            <input type="text" id="nama_kelas" name="nama_kelas" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $kelas->name }}" required>
        </div>
        <div class="mb-5">
            <label for="kode_kelas" class="block mb-2.5 text-[15px]">Kode Kelas</label>
            <input type="text" id="kode_kelas" name="kode_kelas" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $kelas->kode_kelas}}" required>
        </div>
        <div class="mb-5">
            <label for="jumlah" class="block mb-2.5 text-[15px]">Jumlah Mahasiswa</label>
            <input type="text" id="jumlah" name="jumlah" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $kelas->jumlah}}" required>
        </div>
        
        <div class="grid grid-flow-row gap-4  md:flex  md:justify-end md:space-x-4">
            <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm md:px-4 py-[10px] md:py-2 block text-center">
                Simpan
            </button>
            <a href="{{ route('kaprodi.index') }}">
                <button type="button" class="md:px-4 py-[10px] md:py-2 block text-sm font-medium text-gray-900 focus:outline-none bg-gray-100 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Batal
                </button>
            </a>
        </div>
    </form>
           
</div>
@endsection
