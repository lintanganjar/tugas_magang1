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
<div class="bg-white md:p-4 p-2 relative overflow-x-auto">
    
    <p class="text-[22px] bg-gradient-to-br from-purple-700 to-blue-500 bg-clip-text text-transparent mb-7 font-bold">Edit Dosen</p>

    <form action="{{ route('dosen.update', $dosen->id) }}" id="updatedosen" method="POST">
        @csrf
        <div class="grid grid-cols-1  md:grid-cols-2 md:gap-10">
            <div class="mb-4">
                <label for="name" class="text-[16px]">Nama</label>
                <input type="text" id="name" name="name" class="block mt-0.5  w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $dosen->name }}" required>
            </div>
            <div class="mb-4">
                <label for="nip" class="text-[16px]">NIP</label>
                <input type="text" id="nip" name="nip" class="block mt-0.5   w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $dosen->nip }}" required>
            </div>
        </div>
        <div class="grid grid-cols-1  md:grid-cols-2 md:gap-10">
            <div class="mb-4">
                <label for="kode_dosen" class="text-[16px]">Kode Dosen</label>
                <input type="text" id="kode_dosen" name="kode_dosen" class="block mt-0.5  w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" value="{{ $dosen->nip }}" required>
            </div>
            <div class="mb-4">
                <label for="kelas_id" class=" text-[16px] ">Kelas</label>
                <select id="kelas_id" name="kelas_id" class="block mt-0.5  w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900">
                    <option value="">Pilih kelas (Opsional)</option>
                    @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}" {{ $dosen->kelas_id == $kls->id ? 'selected' : '' }}>
                            {{ $kls->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid grid-flow-row gap-4 mt-8 md:flex  md:justify-end md:space-x-4"> <!-- Flexbox container for buttons -->
            <button type="submit" class="text-white md:py-2 py-[11px] md:px-4 block  bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm   text-center">
                Simpan
            </button>
            <a href="{{ route('kaprodi.index') }}">
                <button type="button" class="md:py-2 py-[10px] md:px-4 block w-full text-sm font-medium text-gray-900 focus:outline-none bg-gray-100 rounded-lg border border-gray-400 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Batal
                </button>
            </a>
        </div>
    </form>
</div>
@endsection
