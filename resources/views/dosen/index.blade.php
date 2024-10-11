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
    <div class="head-title">
        <h1 class="md:text-xl text-lg font-bold">Dashboard Dosen</h1>
    </div>
@endsection

@section('data')
<div class="bg-white shadow-sm rounded-lg p-4">
    <p class="md:text-xl text-lg  bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Data Mahasiswa {{$dosen->kelas->name ?? ''}}</p>
    <div class=" flex justify-end">
        @if($dosen->kelas_id)
            <a href="{{ route('dosen.createMahasiswa') }}">
                <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-sm md:rounded-md text-xs md:text-sm md:px-4 md:py-2 px-2 py-1 md:mt-0 mt-5 text-center">
                    Tambah Mahasiswa
                </button>
            </a>
        @endif
    </div>
    <div class="relative overflow-x-auto my-4">
        <table class="w-full border md:text-[13px] text-[12.8px]  text-left rtl:text-right text-gray-500">
            <thead class=" text-white uppercase bg-gradient-to-br from-purple-600 to-blue-500">
                <tr>
                    <th scope="col" class="md:px-5 md:py-3 px-3">NIM</th>
                    <th scope="col" class="md:px-5 md:py-3 px-3">Nama</th>
                    <th scope="col" class="md:px-5 md:py-3 px-3">Email</th>
                    <th scope="col" class="md:px-5 md:py-3 px-3">Tempat Lahir</th>
                    <th scope="col" class="md:px-5 md:py-3 px-5">Tanggal Lahir</th>
                    @if($dosen->kelas_id)
                        <th scope="col" class="md:px-5 md:py-3 flex justify-center items-center">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswadata as $data)
                <tr class="bg-white hover:bg-blue-50 border-b">
                    <th scope="row" class="px-5 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$data->nim}}
                    </th>
                    <td class="md:px-5 md:py-3 px-3">{{$data->name}}</td>
                    <td class="md:px-5 md:py-3 px-3">{{$data->user->email}}</td>
                    <td class="md:px-5 md:py-3 px-5">{{$data->tempat_lahir}}</td>
                    <td class="md:px-5 md:py-3 px-3">{{$data->tanggal_lahir}}</td>
                    @if($dosen->kelas_id)
                    <td class="md:px-5 md:py-3 px-6 flex items-center gap-1">
                        <a href="{{ route('dosen.editMahasiswa', $data->id) }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-2.5 py-0.5 text-center me-2 mb-2">Edit</a>
                        <form action="{{ route('dosen.destroyMahasiswa', $data->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded text-[13px] px-2 py-0.5 text-center me-2 mb-1.5">Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
