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
<div class="relative overflow-x-auto md:p-4 p-2">
    <p class="mb-5 text-[20px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Edit Data Mahasiswa</p>

    <form action="{{ route('mahasiswa.update', $mahasiswadatapribadi->id) }}" method="POST">
        @csrf
        @method('POST')
    
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $mahasiswadatapribadi->name) }}" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" required>
        </div>
    
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" id="nim" name="nim" value="{{ old('nim', $mahasiswadatapribadi->nim) }}" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" required>
        </div>
    
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select id="kelas_id" name="kelas_id" class="block w-full bg-gray-50 border border-gray-300 shadow-sm rounded-md py-1.5 pl-7 pr-20 focus:outline-none focus:border-blue-500  text-gray-900" required>
              
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $mahasiswadatapribadi->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->name }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $mahasiswadatapribadi->tempat_lahir) }}" class="block w-full bg-gray-50 border border-gray-300 rounded-md py-1.5 px-3 text-gray-900" required>
        </div>
    
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswadatapribadi->tanggal_lahir) }}" class="block w-full bg-gray-50 border border-gray-300 rounded-md py-1.5 px-3 text-gray-900" required>
        </div>
    
        <div class="grid grid-flow-row gap-4 my-10  md:flex  md:justify-end md:space-x-4">
            <button type="submit" class="text-white md:px-4 py-[7.8px] md:py-2 block  bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm   text-center">
                Update Data
            </button>
            <a href="{{ route('mahasiswa.index') }}">
                <button type="button" class="md:px-4 py-[7.8px] md:py-2 w-full block text-sm font-medium text-gray-900 focus:outline-none bg-gray-100 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Batal
                </button>
            </a>
        </div>
    </form>
</div>

@endsection
