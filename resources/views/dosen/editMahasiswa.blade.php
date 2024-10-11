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
<div class="p-2 md:p-6">
    <p class="text-[20px] mb-8 bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Edit Data Mahasiswa</p>
    <div class="relative overflow-x-auto my-4">
        <form action="{{ route('dosen.updateMahasiswa', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
                <div class="mb-4">
                    <label for="nim" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">NIM</label>
                    <input type="text" id="nim" name="nim" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $mahasiswa->nim }}" required>
                </div>
        
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Nama</label>
                    <input type="text" id="name" name="name" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $mahasiswa->name }}" required>
                </div>
            </div>
            <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
                <div class="mb-4">
                    <label for="kelas_id" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Kelas</label>
                    <select id="kelas_id" name="kelas_id" class="block w-full md:text-base text-sm bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" required>
                        @foreach($kelas as $kls)
                            <option class="md:text-base text-sm" value="{{ $kls->id }}" {{ $mahasiswa->kelas_id == $kls->id ? 'selected' : '' }}>{{ $kls->name }}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="mb-4">
                    <label for="tempat_lahir" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $mahasiswa->tempat_lahir }}" required>
                </div>
            </div>
            <div class="md:mb-3 grid grid-cols-1 mb-3 md:grid-cols-2 md:gap-10">
                <div class="mb-8">
                    <label for="tanggal_lahir" class="block text-gray-700 md:text-[15px] text-[14.5px] font-medium mb-1 md:mb-1.5">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $mahasiswa->tanggal_lahir }}" required>
                </div>
            </div>
            <div class=" grid grid-flow-row gap-4  md:flex  md:justify-end md:space-x-4"> 
                <button type="submit" class="text-white  py-[7.8px] md:py-1 md:w-auto w-full bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm md:px-4  text-center">
                    Update
                </button>
                <a href="{{ route('dosen.index') }}">
                    <button type="button" class="md:py-2 py-[7px] md:px-4 block w-full text-sm font-medium text-gray-900 focus:outline-none bg-gray-100 rounded-lg border border-gray-400 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                        Batal
                    </button>
                </a>
            </div>
        </form>
    </div>
   
</div>
@endsection
