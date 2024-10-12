@extends('components.layout')

@section('title', 'Dashboard')

@section('sidebar')
<li class="active h-12 rounded-[48px_0_0_48px] relative bg-transparent ml-1.5 p-1">
    <a href="#" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-dashboard min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
        <span class="text">Dashboard</span>
    </a>
</li>
@endsection

@section('content')
    <div class="head-title">
        <h1 class="md:text-xl text-lg font-bold">Dashboard Mahasiswa</h1>
    </div>
    
@endsection

@section('data')
<div class="bg-white shadow-sm  rounded-lg py-5 px-4 md:px-6">
    <p class="mb-10 text-[20px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Informasi Pribadi</p>
    <div class="w-full relative overflow-x-auto text-gray-900 font-semibold text-sm">
        <table class="w-full text-sm text-left rtl:text-right">
            <tbody>
                <tr class="border-b">
                    <td class="md:px-6 md:py-4 p-2 font-normal text-gray-400 whitespace-nowrap">Nama</td>
                    <td class="md:px-6 md:py-4 py-2 px-4">{{ $mahasiswadatapribadi->name }}</td>
                </tr>
                <tr class="border-b">
                    <td class="md:px-6 md:py-4 p-2 font-normal text-gray-400 whitespace-nowrap">NIM</td>
                    <td class="md:px-6 md:py-4 py-2 px-4">{{ $mahasiswadatapribadi->nim }}</td>
                </tr>
                <tr class="border-b">
                    <td class="md:px-6 md:py-4 p-2 font-normal text-gray-400 whitespace-nowrap">Email</td>
                    <td class="md:px-6 md:py-4 py-2 px-4">{{ $mahasiswadatapribadi->user->email }}</td>
                </tr>
                <tr class="border-b">
                    <td class="md:px-6 md:py-4 p-2 font-normal text-gray-400 whitespace-nowrap">Kelas</td>
                    <td class="md:px-6 md:py-4 py-2 px-4">{{ $mahasiswadatapribadi->kelas->name }}</td>
                </tr>
                <tr class="border-b">
                    <td class="md:px-6 md:py-4 p-2 font-normal text-gray-400 whitespace-nowrap">Tempat Lahir</td>
                    <td class="md:px-6 md:py-4 py-2 px-4">{{ $mahasiswadatapribadi->tempat_lahir }}</td>
                </tr>
                <tr class="border-b">
                    <td class="md:px-6 md:py-4 p-2 font-normal text-gray-400 whitespace-nowrap">Tanggal Lahir</td>
                    <td class="md:px-6 md:py-4 py-2 px-4">{{ $mahasiswadatapribadi->tanggal_lahir }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="grid grid-flow-row gap-4 mt-10 md:flex  md:justify-end md:space-x-4">
        <form action="{{ route('mahasiswa.request') }}" method="get">
            @csrf
            <input type="hidden" name="keterangan" value="Request to edit data"> 
            <button type="submit" class="text-white md:px-4 py-[7.8px] md:py-2 block w-full bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm   text-center">
                Request Edit
            </button>
        </form>
    
        @if ($mahasiswadatapribadi->edit) 
            <a href="{{ route('mahasiswa.edit', $mahasiswadatapribadi->id) }}">
                <button type="button" class="text-white  bg-gradient-to-r from-green-700  to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-3000 font-medium rounded-lg text-sm md:py-2 py-[7px] md:px-4 text-center">
                    Edit Data
                </button>
            </a>
        @else
            <button type="button" class="text-gray-400 bg-gray-300 rounded-lg text-sm md:py-2 py-[7px] md:px-4 text-center cursor-not-allowed" disabled>
                Edit Data
            </button>
        @endif
    </div>
    
    
    
    
    




</div>
@endsection

