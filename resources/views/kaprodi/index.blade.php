<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


@extends('components.layout')

@section('sidebar')
<li class="active h-12 rounded-[48px_0_0_48px] relative bg-transparent ml-1.5 p-1">
    <a href="#" class="flex bg-white items-center w-full h-full rounded-full text-[#342E37] text-lg whitespace-nowrap overflow-x-hidden">
        <i class='bx bxs-dashboard min-w-[calc(60px-(4px+6px)*2)] flex justify-center' ></i>
        <span class="text">Dashboard</span>
    </a>
</li>
@endsection
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
        <h1 class="text-xl font-bold">Dashboard Dosen</h1>
    </div>
@endsection

@section('data')

<div class=" grid grid-cols-1 md:grid-cols-3 gap-4  mb-3">
    <div class="text-black shadow-md bg-white   rounded-lg p-4">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" id="agent">
                <defs>
                    <linearGradient xlink:href="#a" id="b" x1="992.183" x2="1019.298" y1="516.081" y2="545.959" gradientTransform="translate(-1640.073 443.344)scale(1.53785)" gradientUnits="userSpaceOnUse"></linearGradient>
                    <linearGradient id="a">
                      <stop offset="0" stop-color="#7e22ce"></stop>
                      <stop offset="1" stop-color="#3b82f6"></stop>
                    </linearGradient>
                </defs>
                <g transform="translate(117.368 -1236.363)">
                  <rect width="48" height="48" x="-117.368" y="1236.363" fill="url(#b)" rx="10.144" ry="10.144"></rect>
                  <path fill="#fff" fill-rule="evenodd" d="M-97.864 1246.978a.5.5 0 0 0-.5.5v4.055a.5.5 0 0 0 .5.5h.998l-.006 1.443a.5.5 0 0 0 .866.342l1.66-1.785h2.482a.5.5 0 0 0 .5-.5v-4.055a.5.5 0 0 0-.5-.5h-6zm.5 1h5v3.055h-2.199a.5.5 0 0 0-.367.16l-.936 1.008.002-.666a.5.5 0 0 0-.5-.502h-1v-3.055zm13.729 4.346h-.467l-.031.465c-.006.087-.04.143-.147.218a.926.926 0 0 1-.426.143h-1.705c-1.234 0-2.238 1.02-2.238 2.26v3.721c0 .923.35 1.759.91 2.404v1.467l-3.379 1.977a3.095 3.095 0 0 0-1.548 2.68v4.187h15.29v-4.258c0-1.064-.57-2.05-1.492-2.578l-3.359-2.006v-1.56a3.66 3.66 0 0 0 .834-2.313v-4.481l-.004-.031c-.08-.608-.265-1.17-.637-1.603-.372-.434-.943-.699-1.601-.696zm-17.098.01-.03.465c-.004.082-.036.135-.138.207a.886.886 0 0 1-.408.136h-1.66c-1.21 0-2.194 1.006-2.194 2.223v2.221a.5.5 0 0 0 0 .1v1.312c0 .85.306 1.623.795 2.24v1.58l-3.433 2.012a3.134 3.134 0 0 0-1.567 2.715v4.313h6.332l1.42 1.505 1.422-1.507h6.332v-4.383c0-1.076-.575-2.07-1.504-2.608h-.004l-3.418-2.045v-1.673c.446-.602.72-1.34.72-2.149v-1.039a.5.5 0 0 0 0-.174v-3.161l-.005-.033c-.077-.596-.259-1.146-.623-1.572-.364-.426-.925-.687-1.57-.684h-.467zm17.281 1.072c.27.04.506.096.659.274.192.224.336.594.4 1.07v2.213l-.002-.455v.5l.002.03v.128a1.992 1.992 0 0 0-.459-.153c-.47-.087-.933-.047-1.365-.029-.432.018-.83.016-1.135-.068-.305-.084-.521-.215-.725-.568a.5.5 0 0 0-.459-.25.5.5 0 0 0-.457.371c.026-.095-.024.037-.12.152a4.028 4.028 0 0 1-.378.385c-.054.048-.102.077-.156.121v-.119l-.002-.022v-1.567c0-.71.548-1.26 1.238-1.26h1.766c.326-.021.655-.121.943-.326.127-.09.154-.288.25-.427zm-16.629 0c.254.04.48.09.625.26.186.217.325.577.387 1.04v2.118a2.153 2.153 0 0 0-.347-.098c-.476-.088-.945-.05-1.383-.03-.44.017-.844.017-1.155-.069-.31-.086-.533-.221-.74-.582a.5.5 0 0 0-.459-.25.5.5 0 0 0-.457.37c.025-.094-.024.04-.123.158-.098.117-.24.26-.387.392-.014.013-.028.02-.043.033v-1.385c0-.69.529-1.222 1.194-1.222h1.72c.32-.021.645-.122.928-.323.123-.087.147-.278.24-.412zm4.217 1.574a.5.5 0 0 0-.5.5v4.055a.5.5 0 0 0 .5.5h2.483l1.658 1.785a.5.5 0 0 0 .867-.342l-.006-1.443h.998a.5.5 0 0 0 .5-.5l-.002-4.055a.5.5 0 0 0-.5-.5h-5.998zm.5 1h4.998l.002 3.055h-1a.5.5 0 0 0-.5.502l.002.666-.935-1.008a.5.5 0 0 0-.367-.16h-2.2v-3.055zm-7.627 1.008c.257.218.48.521.772.602.506.14 1.008.124 1.463.105.455-.019.865-.04 1.158.014.255.047.4.131.53.315v.97c0 1.453-1.133 2.598-2.548 2.598s-2.547-1.145-2.547-2.598v-1.013c.053-.031.105-.06.159-.094a4.995 4.995 0 0 0 1.014-.898zm16.617.301c.253.212.471.51.756.59.5.138.995.12 1.444.101.448-.019.853-.037 1.14.016.287.053.433.127.575.373a.5.5 0 0 0 .066.09v.678c0 1.49-1.166 2.668-2.627 2.668-1.46 0-2.629-1.178-2.629-2.668v-.805h.002c.1-.044.185-.103.277-.162a4.948 4.948 0 0 0 .996-.88zm-13.414 4.773v.844l-1.855 1.582-1.725-1.47v-.913a3.468 3.468 0 0 0 1.752.489c.672 0 1.293-.202 1.828-.532zm16.561.245v1.138c-.318.588-.573 1.188-1.242 1.76l-.024.019-.023.025-.492.459-.492-.48-.024-.02c-.514-.548-.964-1.155-1.215-1.758v-1.104a3.553 3.553 0 0 0 1.719.457c.656 0 1.262-.19 1.793-.498zm-15.986 1.423.422.252-1.026 1.733-.35-.278v-.012h-.013l-.272-.214-.256-.205 1.495-1.276zm-4.807.043 1.443 1.233-.18.144-.712.567-.996-1.684.445-.26zm21.6.288 3.05 1.82h.004c.612.35.99 1.003.99 1.71v3.259h-1.835v-1.682h-1v1.682h-3.309v-2.52h.006v-1.715l.709-.66.03-.033c.762-.67 1.089-1.34 1.355-1.861zm-5.145 0c.328.688.812 1.301 1.316 1.837l.02.02.057.05.652.638v4.242h-3.242v-1.681h-1v1.681h-1.904v-3.187a2.09 2.09 0 0 1 1.05-1.815h.002l3.05-1.785zm-10.367.433 2.057 1.229h.004a2.012 2.012 0 0 1 1.01 1.746v3.383h-1.456v-1.475h-1v1.475h-2.586l-.54-4.09c.04-.058.08-.116.113-.18l.79.629 1.608-2.717zm-7.397.043 1.582 2.674.834-.66c.036.074.078.143.125.21l-.539 4.093h-2.48v-1.477h-1v1.476h-1.56v-3.312c0-.767.406-1.47 1.068-1.85h.002l1.968-1.154zm3.686.998.477.383v.01a.46.46 0 0 1-.227.398.438.438 0 0 1-.445 0 .46.46 0 0 1-.227-.398v-.047l.422-.342zm-.213 1.815c.16.027.32.027.48 0l.499 3.77-.739.782-.738-.783.498-3.77z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"></path>
                </g>
              </svg>
              <div class="inline border-l-2 pl-4">
                <p class="text-[17px] mb-4 font-semibold ">Jumlah Mahasiswa </p>
                <p class="text-4xl font-bold ">{{ $jumlahmahasiswa }}</p>
              </div>
        </div>
        
    </div>
    <div class=" text-black shadow-md bg-white   rounded-lg p-4">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" id="agent">
                <defs>
                    <linearGradient xlink:href="#a" id="b" x1="992.183" x2="1019.298" y1="516.081" y2="545.959" gradientTransform="translate(-1640.073 443.344)scale(1.53785)" gradientUnits="userSpaceOnUse"></linearGradient>
                    <linearGradient id="a">
                      <stop offset="0" stop-color="#7e22ce"></stop>
                      <stop offset="1" stop-color="#3b82f6"></stop>
                    </linearGradient>
                </defs>
                <g transform="translate(117.368 -1236.363)">
                  <rect width="48" height="48" x="-117.368" y="1236.363" fill="url(#b)" rx="10.144" ry="10.144"></rect>
                  <path fill="#fff" fill-rule="evenodd" d="m-91.834 1244.363-.032.465c-.014.22-.123.38-.334.528-.21.148-.52.249-.797.267h-2.617c-1.741 0-3.154 1.426-3.154 3.174v2.379c0 .068.002.086.002.029 0-.034-.002-.039-.002.031v1.037a.5.5 0 0 0 0 .1v2.072c0 1.297.48 2.47 1.248 3.393v2.701l-5.527 3.205a4.59 4.59 0 0 0-2.32 3.985v6.423h9.775l2.105 2.211 2.106-2.213h9.775v-6.533c0-1.58-.854-3.04-2.23-3.822l-5.498-3.256v-2.844a5.286 5.286 0 0 0 1.128-3.25v-1.718a.5.5 0 0 0 0-.092v-1.399c0-.055-.001-.049-.002-.025 0 .02.002.031.002-.029v-3.516l-.003-.033c-.117-.891-.393-1.695-.915-2.3-.521-.605-1.304-.97-2.246-.965h-.464zm.648 1.075c.564.044 1.004.192 1.307.543.342.396.572 1.01.673 1.77v3.427c0-.052 0-.036-.002.025 0 .077.002.075.002.031v.275a2.887 2.887 0 0 0-.882-.32c-.694-.127-1.413-.074-2.106-.045-.693.03-1.357.034-1.9-.115-.544-.15-.973-.416-1.332-1.035a.5.5 0 0 0-.46-.25.5.5 0 0 0-.454.369c.012-.048-.087.158-.252.353a5.766 5.766 0 0 1-1.176 1.055v-.287c0 .055.002.037.002-.027 0-.077-.002-.073-.002-.03v-2.378c0-1.216.953-2.174 2.154-2.174h2.682c.452-.03.916-.17 1.308-.447.227-.16.298-.477.438-.738zm-4.61 5.62c.427.451.91.79 1.438.934.738.203 1.496.182 2.205.153.71-.03 1.373-.066 1.885.027.478.088.802.254 1.062.652v1.62c0 2.4-1.903 4.316-4.28 4.316-2.379 0-4.282-1.915-4.282-4.317v-1.74c.13-.059.25-.133.379-.215.275-.174.56-.396.83-.636.27-.24.525-.497.73-.739.016-.018.019-.037.034-.055zm5.462 7.632v1.955l-3.198 2.703-2.988-2.525v-2.036a5.22 5.22 0 0 0 3.033.975 5.216 5.216 0 0 0 3.153-1.072zm.587 2.77 1.079.638-1.918 3.209-1.254-.99-.662-.528 2.755-2.33zm-7.486.067 2.676 2.264-.54.433-1.378 1.083-1.871-3.133 1.113-.647zm9.424 1.08 3.475 2.057h.003a3.397 3.397 0 0 1 1.725 2.953v5.533h-2.853v-2.568h-1v2.568h-4.592l-.895-6.705c.157-.196.282-.415.356-.656l1.279 1.008 2.502-4.19zm-11.402.068 2.459 4.12 1.347-1.057c.072.26.209.496.377.707l-.896 6.707h-4.426v-2.57h-1v2.57h-3.018v-5.424c0-1.288.692-2.477 1.819-3.117h.002l3.336-1.936zm5.681 1.574 1.031.823v.142a.988.988 0 1 1-1.978 0v-.205h.002l.945-.758zm-.578 2.842c.404.134.836.133 1.24 0l.838 6.291-1.457 1.53-1.459-1.53.838-6.29z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"></path>
                </g>
              </svg>
              <div class="inline border-l-2 pl-4">
                <p class="text-[17px] mb-4 font-semibold ">Jumlah Dosen </p>
                <p class="text-4xl font-bold ">{{ $jumlahdosen }}</p>
              </div>
        </div>
        
    </div>
    <div class="text-black shadow-md bg-white   rounded-lg p-4">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" id="door">
                <defs>
                  <linearGradient xlink:href="#a" id="b" x1="992.183" x2="1019.298" y1="516.081" y2="545.959" gradientTransform="translate(-1640.073 443.344)scale(1.53785)" gradientUnits="userSpaceOnUse"></linearGradient>
                  <linearGradient id="a">
                    <stop offset="0" stop-color="#7e22ce"></stop>
                    <stop offset="1" stop-color="#3b82f6"></stop>
                  </linearGradient>
                </defs>
                <g transform="translate(117.368 -1236.363)">
                  <rect width="48" height="48" x="-117.368" y="1236.363" fill="url(#b)" rx="10.144" ry="10.144"></rect>
                  <path fill="#fff" fill-rule="evenodd" d="M-100.868 1247.363a.5.5 0 0 0-.5.5v24.5h-6v1h28v-1h-6v-24.5a.5.5 0 0 0-.5-.5h-15zm.5 1h14v24h-14v-24zm3.5 3a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5h-7zm.5 1h2.5v5h-2.5v-5zm3.5 0h2.5v5h-2.5v-5zm-3.5 6h2.5v5h-2.5v-5zm3.5 0h2.5v5h-2.5v-5zm-6 4a.5.5 0 0 0-.5.5.5.5 0 0 0 .5.5.5.5 0 0 0 .5-.5.5.5 0 0 0-.5-.5zm2 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7zm.5 1h6v1h-6v-1z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"></path>
                </g>
              </svg>
              <div class="inline border-l-2 pl-4">
                <p class="text-[17px] mb-4 font-semibold ">Jumlah Kelas </p>
                <p class="text-4xl font-bold ">{{ $jumlahkelas }}</p>
              </div>
        </div>
    </div>
</div>

{{-- CHART --}}
<div class="container overflow-x-auto mt-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4 mb-3">
    <div class="bg-white shadow-md rounded-md p-3">
        <h1 class="text-lg bg-gradient-to-br from-purple-700 to-blue-500 bg-clip-text text-transparent font-bold mb-4">Grafik Mahasiswa Berdasarkan Kelas</h1>
        <p class="text-xs mb-4 text-gray-500">Total Mahasiswa: {{ $jumlahmahasiswa }}</p>
        <canvas id="myChart" width="100" height="50"></canvas>
    
        <script>
            var labels = @json($labels);
            var counts = @json($counts);
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah mahasiswa perkelas',
                        data: counts,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script> 
    </div>
    <div class="bg-white shadow-md rounded-md   p-4">
        <h1 class="text-[18px] mb-6 bg-gradient-to-br from-purple-700 to-blue-500 bg-clip-text text-transparent font-bold ">Jumlah Mahasiswa Berdasarkan Tahun Lahir</h1>
        <canvas id="lineChart" width="400" height="200"></canvas>
    </div>
    <div class="bg-white shadow-md rounded-md p-4"> 
        <h1 class="text-[18px] bg-gradient-to-br from-purple-700 to-blue-500 bg-clip-text text-transparent font-bold mb-4">Jumlah Dosen Berdasarkan Jabatan</h1>
        <canvas id="myPieChart" width="200" height="200"></canvas>
    </div>
</div>

<script>
    window.onload = function() {
        // Donut chart for Dosen
        var pieLabels = @json($pieLabels);
        var pieCounts = @json($pieCounts);
        const pieCtx = document.getElementById('myPieChart');

        new Chart(pieCtx, {
            type: 'doughnut',
            data: {
                labels: pieLabels,
                datasets: [{
                    label: 'Jumlah Dosen',
                    data: pieCounts,
                    backgroundColor: ['#FF6384', '#36A2EB'], 
                    hoverOffset: 4
                }]
            },
           
        });

        // Line chart for Mahasiswa by Year of Birth
        var labels = @json($tahun_lahir);
        var counts = @json($jumlah);
        const lineCtx = document.getElementById('lineChart');

        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Mahasiswa',
                    data: counts,
                    borderColor: '#4BC0C0',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Mahasiswa'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tahun Lahir'
                        }
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });
    }
</script>
    
        {{-- TABEL DOSEN --}}
        <div class="rounded-md shadow  mt-5 bg-white p-5">
            <p class="text-[20px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Data Dosen</p>
            <div class="mb-2.5  mt-5 md:mt-0 flex justify-end">
                <a href="{{ route('dosen.create') }}">
                    <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-md text-sm px-4 py-2 text-center">
                        Tambah Dosen
                    </button>
                </a>
            </div>
            <div class="  relative overflow-x-auto mb-5">
                <table class="w-full border text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs  text-white uppercase bg-gradient-to-br from-purple-600 to-blue-500">
                        <tr>
                            <th scope="col" class="px-8 py-3">NIP</th>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Kelas Ajar</th>
                            <th scope="col" class="px-6 py-3">Jabatan</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosen as $dosen)
                        <tr class="bg-white hover:bg-[#eefaff] border-b">
                            <th scope="row" class="px-6 py-3 font-medium text-gray-900 ">
                                {{$dosen->nip}}
                            </th>
                            <td class="px-6 py-3">{{$dosen->name}}</td>
                            <td class="px-6 py-3">{{$dosen->kelas->name ?? '-'}}</td> <!-- Assuming `kelas` has a name attribute -->
                            <td class="px-6 py-3">@if($dosen->kelas_id)
                                Dosen Wali
                            @else
                                Dosen
                            @endif</td>
                            <td class="px-6 flex items-center gap-4 py-3">
                                <a href="{{ route('dosen.edit', $dosen->id) }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-3.5 py-1 text-center me-2 mb-2">Edit</a>
                                <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded text-[13px] px-3 py-1 text-center me-2 mb-1.5" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        

        {{-- TABEL KELAS --}}
        <div class="rounded-md mt-5 shadow-md bg-white p-5">
            <P class="text-[22px] bg-gradient-to-br from-purple-600 to-blue-500 bg-clip-text text-transparent font-bold">Data Kelas</P>
            <div class="mb-2.5 mt-5 md:mt-0 flex justify-end">
                <a href="{{ route('kelas.create') }}">
                    <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-md text-sm px-4 py-2 text-center">
                        Tambah Kelas
                    </button>
                </a>
            </div>
            <div class=" bg-white relative overflow-x-auto mb-5">
                <table class="w-full border text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs  text-white uppercase bg-gradient-to-br from-purple-600 to-blue-500">
                        <tr>
                            <th scope="col" class="px-8 py-3">Nama Kelas</th>
                            <th scope="col" class="px-5 py-3">Dosen Pengampu</th>
                            <th scope="col" class="px-5 py-3">Jumlah Mahasiswa</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kelas as $kelas)
                        <tr class="bg-white hover:bg-[#e9f5fa] border-b">
                            <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap">
                                {{$kelas->name}}
                            </th>
                            <td class="px-5 py-3"> @if ($kelas->dosen->isEmpty())
                                Tidak ada dosen
                            @else
                                @foreach ($kelas->dosen as $dosen)
                                    {{ $dosen->name }} <br>
                                @endforeach
                            @endif</td>
                            <td class="px-5 py-3">{{$kelas->jumlah}}</td>
                            <td class="px-4 flex gap-4 py-3">
                                <a href="{{ route('kelas.edit', $kelas->id) }}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-3.5 py-1 text-center me-2 mb-2">Edit</a>
                                <form action="{{ route('kelas.destroy', $kelas->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded text-[13px] px-2 py-1 text-center me-2 mb-1.5" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
    


 <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data berhasil diperbarui.',
                showConfirmButton: true,
            });
        @endif
    </script>
@endsection
