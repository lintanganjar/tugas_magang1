<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\kelas;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        $dosen = Dosen::all();
        $kelas = Kelas::all();
        $jumlahmahasiswa = mahasiswa::count();
        $jumlahdosen = Dosen::count();
        $jumlahkelas = Kelas::count();

            // Group dosen by kelas_id
        $dosenWali = Dosen::whereNotNull('kelas_id')->count(); // Count dosen with kelas_id
        $dosenBiasa = Dosen::whereNull('kelas_id')->count(); // Count dosen without kelas_id

        // Set up labels and counts for the pie chart
        $pieLabels = ['Dosen Wali', 'Dosen Biasa'];
        $pieCounts = [$dosenWali, $dosenBiasa];
        // Dapatkan jumlah mahasiswa per kelas
        $kelaslist = Kelas::withCount('mahasiswa')->get();
        $rasioMahasiswaPerDosen = $jumlahdosen > 0 ? $jumlahmahasiswa / $jumlahdosen : 0;

        // Menyusun data untuk digunakan di grafik
        $labels = $kelaslist->pluck('name'); // Nama kelas
        $counts = $kelaslist->pluck('mahasiswa_count'); // Jumlah mahasiswa
        $data = DB::table('mahasiswa')
        ->select(DB::raw('YEAR(tanggal_lahir) as tahun_lahir'), DB::raw('count(*) as jumlah'))
        ->groupBy('tahun_lahir')
        ->orderBy('tahun_lahir')
        ->get();

        // Prepare the labels and data for the chart
        $tahun_lahir = $data->pluck('tahun_lahir');
        $jumlah = $data->pluck('jumlah');

        return view('kaprodi.index', compact('dosen', 'kelas', 'jumlahmahasiswa', 'jumlahdosen', 'jumlahkelas', 'labels', 'counts', 'pieLabels', 'pieCounts', 'rasioMahasiswaPerDosen', 'tahun_lahir', 'jumlah'));
    }

    function dosen(){
       
        $user = Auth::user();
        $dosen = dosen::where('user_id', $user->id)->first();
      
        $mahasiswadata = Mahasiswa::where('kelas_id', $dosen->kelas_id)->get();
        if ($dosen->kelas_id) {
            $mahasiswadata = Mahasiswa::where('kelas_id', $dosen->kelas_id)->get();
        } else {
            $mahasiswadata = Mahasiswa::all(); // Get all mahasiswa if kelas_id is not present
        }

        return view("dosen.index", compact('mahasiswadata', 'dosen'));
    }

    function mahasiswa(){
        $userEmail = Auth::user()->email;

        // Mengambil data mahasiswa berdasarkan email
        $mahasiswadatapribadi = mahasiswa::whereHas('user', function($query) use ($userEmail) {
            $query->where('email', $userEmail);
        })->first(); // Mengambil data pertama yang sesuai

        return view("mahasiswa.index", compact('mahasiswadatapribadi'));
        
    }

  
}
