@extends('components.layout')
@section('sidebar')
<li class="active h-12 rounded-[48px_0_0_48px] relative bg-transparent ml-1.5 p-1">
    <a href="{{ route('dosen.index') }}" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-dashboard min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
        <span class="text">Dashboard</span>
    </a>
</li>
<li class="h-12 relative bg-transparent ml-1.5 p-1">
    <a href="{{ route('dosen.request') }}" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-message-dots min-w-[calc(60px-(4px+6px)*2)] flex justify-center'></i>
        <span class="text">Message</span>
    </a>
</li>
@endsection
@section('content')
<div class="md:p-5 p-2 relative overflow-x-auto">
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ $errors->first() }}</span>
        </div>
    @endif

    <p class="md:text-[21px] text-[19px] my-1 bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Tambah Data Mahasiswa</p>
    <p class="md:text-[15px] text-sm mb-10 text-gray-500">Lengkapi form berikut untuk menambahkan data mahasiswa baru</p>

    <form action="{{ route('dosen.storeMahasiswa') }}" method="POST">
        @csrf
        <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
                <div class="mb-3.5">
                    <label for="name" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Nama</label>
                    <input type="text" id="name" name="name" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div class="mb-3.5">
                    <label for="nim" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">NIM</label>
                    <input type="text" id="nim" name="nim" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
                </div>
            
        </div>
        <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
            <div class="mb-3.5">
                <label for="email" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Email</label>
                <input type="email" id="email" name="email" class="block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
            </div>
        
            <div class="mb-3.5">
                <label for="password" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Password</label>
                <input type="password" id="password" name="password" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
            </div>
        </div>
       <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
            <div class="mb-3.5">
                <label for="username" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Username</label>
                <input type="text" id="username" name="username" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-3.5">
                <label for="tempat_lahir" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
            </div>
       </div>
        <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
            <div class="mb-3.5">
                <label for="tanggal_lahir" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-8">
                <label for="kelas_id" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Kelas</label>
                <input type="hidden" name="kelas_id" value="{{ $dosen->kelas_id }}"> <!-- Set kelas_id to the dosen's kelas_id -->
                <p class="border border-gray-300 p-2 rounded-md bg-gray-100 text-gray-700">{{ optional($dosen->kelas)->name ?? 'Kelas tidak tersedia' }}</p> <!-- Display the kelas name -->
            </div>
            
        </div>
        <div class=" grid grid-flow-row gap-4  md:flex  md:justify-end md:space-x-4"> 
            <button type="submit" class="text-white  md:py-2 py-[11px] md:px-4 md:w-auto w-full bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm   text-center">
                Update
            </button>
            <a href="{{ route('dosen.index') }}">
                <button type="button" class="md:py-2 py-[10px] md:px-4 block w-full text-sm font-medium text-gray-900 focus:outline-none bg-gray-100 rounded-lg border border-gray-400 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Batal
                </button>
            </a>
        </div>
    </form>
</div>
@endsection
