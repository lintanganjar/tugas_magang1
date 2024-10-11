<?php
namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // HTTP Request
use App\Models\Requests; // Model for the 'requests' table

class MahasiswaController extends Controller
{
    public function index()
{
    $mahasiswa = auth()->user(); 
    $userEmail = Auth::user()->email;

    $mahasiswadatapribadi = Mahasiswa::whereHas('user', function($query) use ($userEmail) {
        $query->where('email', $userEmail);
    })->with('latestRequest')->first();

    return view('mahasiswa.index', compact('mahasiswa', 'mahasiswadatapribadi'));
}

    public function edit($id)
{
    // Get the student data
    $mahasiswadatapribadi = Mahasiswa::findOrFail($id); 
    $kelas = Kelas::all(); 
    return view('mahasiswa.edit', compact('mahasiswadatapribadi', 'kelas'));
}

    public function showRequestForm()
{
    $userEmail = Auth::user()->email;

    // Mengambil data mahasiswa berdasarkan email
    $mahasiswadatapribadi = Mahasiswa::whereHas('user', function($query) use ($userEmail) {
        $query->where('email', $userEmail);
    })->first();

    return view('mahasiswa.request', compact('mahasiswadatapribadi'));
}

    
public function sendRequest(Request $request)
{
    $request->validate([
        'keterangan' => 'required|string',
    ]);
    
    $mahasiswa = auth()->user(); 
    $userEmail = Auth::user()->email;

    $mahasiswadatapribadi = Mahasiswa::whereHas('user', function($query) use ($userEmail) {
        $query->where('email', $userEmail);
    })->first();

    // Simpan request untuk dosen
    Requests::create([
        'mahasiswa_id' => $mahasiswadatapribadi->id,
        'kelas_id' => $mahasiswadatapribadi->kelas_id,
        'keterangan' => $request->keterangan,
    ]);

    return redirect()->route('mahasiswa.index')->with('message', 'Request has been sent to the lecturer.');
}


public function update(Request $request, $id)
{
    // Validate incoming data
    $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|max:20',
        'kelas_id' => 'required|exists:kelas,id', // Assuming you have a kelas table
        'tanggal_lahir' => 'required|date',
        'tempat_lahir' => 'required|string|max:255',
    ]);

    // Find the student and update their data
    $mahasiswadatapribadi = Mahasiswa::findOrFail($id);
    $mahasiswadatapribadi->update([
        'name' => $request->nama,
        'nim' => $request->nim,
        'kelas_id' => $request->kelas_id,
        'tanggal_lahir' => $request->tanggal_lahir,
        'tempat_lahir' => $request->tempat_lahir,
    ]);

    // Setel edit kembali ke false setelah update
    $mahasiswadatapribadi->update(['edit' => false]);

    return redirect()->route('mahasiswa.index')->with('message', 'Data updated successfully.');
}

}
