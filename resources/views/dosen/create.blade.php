
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
<div class="bg-white p-2 md:p-5 relative overflow-x-auto">
    
    <p  class="mb-1 text-[21px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Tambah Dosen Baru</p>
    <p class="text-[15px] text-gray-500 mb-9">Lengkapi form berikut untuk menambahkan data dosen baru</p> 
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
    
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class=" grid grid-cols-1  md:grid-cols-2 md:gap-10">
            <div class="mb-4">
                <label for="name" class="block mb-1 text-[15px]">Nama</label>
                <input type="text" id="name" name="name" class="block w-full bg-gray-50 border border-gray-300 rounded-md py-1.5 pl-7 pr-20 focus:outline-none text-gray-900  focus:border-blue-500 placeholder:text-gray-400 sm:text-sm sm:leading-6"  required>
            </div>
            <div class="mb-4">
                <label for="nip" class="block mb-1 text-[15px]">NIP</label>
                <input type="text" id="nip" name="nip" class="block w-full bg-gray-50 border border-gray-300 rounded-md py-1.5 pl-7 pr-20 focus:outline-none text-gray-900  focus:border-blue-500 placeholder:text-gray-400 sm:text-sm sm:leading-6"  required>
            </div>
        </div>
        <div class=" grid grid-cols-1  md:grid-cols-2 md:gap-10">
            <div class="mb-4">
                <label for="kode_dosen" class="block mb-1 text-[15px]">Kode Dosen</label>
                <input type="text" id="kode_dosen" name="kode_dosen" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none text-gray-900  focus:border-blue-500 placeholder:text-gray-400  sm:text-sm sm:leading-6"  required>
            </div>
            <div class="mb-4">
                <label for="kelas_id" class="block mb-1 text-[15px]">Kelas</label>
                <input type="text" id="kelas_id" name="jumlah" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none text-gray-900  focus:border-blue-500 placeholder:text-gray-400  sm:text-sm sm:leading-6" >
            </div>
        </div>
        <div class=" grid grid-cols-1  md:grid-cols-2 md:gap-10">
            <div class="mb-4">
                <label for="username" class="block mb-1 text-[15px]">Username</label>
                <input type="text" id="username" name="username" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-1 text-[15px]">Email</label>
                <input type="email" id="email" name="email" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" required>
            </div>
        </div>
        <div class=" grid grid-cols-1  md:grid-cols-2 md:gap-10">
            <div class="mb-4">
                <label for="password" class="block mb-1 text-[15px]">Password</label>
                <div class="relative ">
                    <input type="password" name="password" id="password" class=" block w-full p-2 border  border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 sm:text-sm" required>
                    <button type="button" onclick="togglePassword()"  class="absolute inset-y-0 right-0 pr-5 flex items-center text-lg leading-5">
                        <i id="toggleIcon" class="bx bx-show text-gray-700"><i class=""></i></i>
                    </button>
                </div>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-1 text-[15px]">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full shadow-sm bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 py-1.5 pl-7 pr-20 text-gray-900" required>
            </div>
        </div>
        <div class="grid grid-flow-row gap-4 mt-8 md:flex  md:justify-end md:space-x-4"> 
            <button type="submit" class="text-white bg-gradient-to-br block  from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-md text-sm md:py-2 py-[11px] md:px-4 text-center">
                Simpan
            </button>
            <a href="{{ route('kaprodi.index') }}">
                <button type="button" class="md:py-2 py-[10px] md:px-4  block w-full text-sm font-medium text-gray-900 focus:outline-none bg-gray-200  rounded-md border border-gray-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Batal
                </button>
            </a>
        </div>
    </form>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("toggleIcon");
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove('bx-show');
                toggleIcon.classList.add('bx-hide');
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove('bx-hide');
                toggleIcon.classList.add('bx-show');
            }
        }
    </script>      
</div>
@endsection
