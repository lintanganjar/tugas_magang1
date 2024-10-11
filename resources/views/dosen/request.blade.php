@extends('components.layout')

@section('sidebar')
<li class="h-12 rounded-[48px_0_0_48px] relative bg-transparent ml-1.5 p-1">
    <a href="{{ route('dosen.index') }}" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-dashboard min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
        <span class="text">Dashboard</span>
    </a>
</li>
<li class="h-12 active rounded-[48px_0_0_48px]  relative bg-transparent ml-1.5 p-1">
    <a href="{{ route('dosen.request') }}" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-message-dots min-w-[calc(60px-(4px+6px)*2)] flex justify-center'></i>
        <span class="text">Message</span>
    </a>
    
</li>
@endsection

@section('content')
<div class="p-2 md:p-4">
    <!-- Display error message if there's any -->
    @if(session('error'))
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        Error
    </div>
    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
        <p>{{ session('error') }}</p>
    </div>
@endif

    <p class="mb-5 text-[20px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Request Mahasiswa</p>
    <div class="relative overflow-x-auto my-4">
        <table class="w-full border md:text-sm text-xs text-left rtl:text-right text-gray-500 ">
            <thead class="text-[13px] text-white border uppercase bg-gradient-to-br from-purple-600 to-blue-500">
                <tr>
                    <th scope="col" class="md:px-5 md:py-3 px-3">Nama</th>
                    <th scope="col" class="md:px-5 md:py-3 px-3">NIM</th>
                    <th scope="col" class="md:px-5 md:py-3 px-3">Keterangan</th>
                    <th scope="col" class="md:px-5 md:py-3 px-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($requests->isEmpty())
                    <tr class="bg-white">
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                           <i> ~ Tidak ada request dari Mahasiswa ~</i>
                        </td>
                    </tr>
                @else
                    @foreach ($requests as $request)
                        <tr class="bg-white ">
                            <td class="md:px-5 md:py-3 px-3">{{ $request->mahasiswa->name }}</td>
                            <td class="md:px-5 md:py-3 px-3">{{ $request->mahasiswa->nim }}</td>
                            <td class="md:px-5 md:py-3 px-3">{{ $request->keterangan }}</td>
        
                            <td class="md:px-5 md:py-3 px-3 md:flex md:gap-3 grid-rows-2 mb-4">
                                <form action="{{ route('dosen.request.approve', $request->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-1.5 text-center">Approve</button>
                                </form>
                                
                                <form action="{{ route('dosen.request.reject', $request->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-1.5 text-center me-2 mb-2">Reject</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
