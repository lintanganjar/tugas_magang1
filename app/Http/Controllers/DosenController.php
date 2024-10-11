<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dosen;
use App\Models\kelas;
use App\Models\requests;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function index() {
        $user = Auth::user();
        $dosen = dosen::where('user_id', $user->id)->first();
        if (!$dosen) {
            return redirect()->route('dosen.index')->with('error', 'Dosen tidak ditemukan untuk pengguna ini.');
        }
        if (!$dosen->kelas_id) {
            return redirect()->route('dosen.index')->with('error', 'Anda tidak memiliki kelas terkait.');
        }
        
        $mahasiswadata = Mahasiswa::where('kelas_id', $dosen->kelas_id)->get();
        return view("dosen.index", compact('mahasiswadata', 'dosen'));
    }
    
    public function edit($id)
    {
        $dosen = dosen::findOrFail($id);
        $kelas = kelas::all(); // Ambil semua kelas untuk dropdown
        return view('dosen.edit', compact('dosen', 'kelas'));
    }
    public function createMahasiswa()
    {
        $user = Auth::user();
        $dosen = Dosen::where('user_id', $user->id)->first();
        $kelas = kelas::all();
        if (!$dosen || !$dosen->kelas_id) {
            return redirect()->route('dosen.dashboard')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }
    
        return view('dosen.createMahasiswa', compact('kelas', 'dosen'));
    }
    public function storeMahasiswa(Request $request)
    {
        $user = Auth::user();
        $dosen = Dosen::where('user_id', $user->id)->first();
    
        if (!$dosen || !$dosen->kelas_id) {
            return redirect()->route('dosen.index')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }
    
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|numeric|unique:mahasiswa,nim', // Ensure nim is numeric
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required|exists:kelas,id',
            'tempat_lahir' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'username' => 'required|string|unique:users,username', // Validate username uniqueness
        ]);
    
        $newUser = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'username' => $request->username,
        ]);

        if ($newUser) {
            Mahasiswa::create([
                'name' => $request->name,
                'nim' => $request->nim,
                'kelas_id' => $dosen->kelas_id,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'user_id' => $newUser->id, // Corrected to use the new user's ID (the student)
            ]);
            
    
            return redirect()->route('dosen.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
        }
    
        // If user creation failed, redirect with error
        return redirect()->route('dosen.index')->with('error', 'Gagal menambahkan mahasiswa.');
    }
    
    public function editMahasiswa($id)
    {
        $user = Auth::user();
        $dosen = Dosen::where('user_id', $user->id)->first();
        $kelas = kelas::all(); 

        if (!$dosen || !$dosen->kelas_id) {
            return redirect()->route('dosen.index')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        $mahasiswa = Mahasiswa::where('id', $id)->where('kelas_id', $dosen->kelas_id)->first();

        if (!$mahasiswa) {
            return redirect()->route('dosen.index')->with('error', 'Mahasiswa tidak ditemukan.');
        }

        return view('dosen.editMahasiswa', compact('mahasiswa','kelas'));
    }
    public function updateMahasiswa(Request $request, $id)
    {
        $user = Auth::user();
        $dosen = Dosen::where('user_id', $user->id)->first();

        if (!$dosen || !$dosen->kelas_id) {
            return redirect()->route('dosen.index')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        $mahasiswa = Mahasiswa::where('id', $id)->where('kelas_id', $dosen->kelas_id)->first();

        if (!$mahasiswa) {
            return redirect()->route('dosen.index')->with('error', 'Mahasiswa tidak ditemukan.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim,' . $id,
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
        ]);

        $mahasiswa->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }
    public function destroyMahasiswa($id)
{
    $user = Auth::user();
    $dosen = Dosen::where('user_id', $user->id)->first();

    if (!$dosen || !$dosen->kelas_id) {
        return redirect()->route('dosen.dashboard')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }

    $mahasiswa = Mahasiswa::where('id', $id)->where('kelas_id', $dosen->kelas_id)->first();

    if (!$mahasiswa) {
        return redirect()->route('dosen.index')->with('error', 'Mahasiswa tidak ditemukan.');
    }

    User::where('id', $mahasiswa->user_id)->delete();

    // Hapus data mahasiswa
    $mahasiswa->delete();

    return redirect()->route('dosen.index')->with('success', 'Mahasiswa dan user terkait berhasil dihapus.');
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas_id' => 'nullable|exists:kelas,id',
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:20',
            'kode_dosen'=>'required|string|max:20'
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->kelas_id = $request->kelas_id;
        $dosen->name = $request->name;
        $dosen->nip = $request->nip;
        $dosen->kode_dosen = $request->kode_dosen;
        $dosen->save();

        return redirect()->route('kaprodi.index');
        
    }

    public function request()
    {
        $userEmail = Auth::user()->email;
    
        $dosendatapribadi = dosen::whereHas('user', function($query) use ($userEmail) {
            $query->where('email', $userEmail);
        })->first();

        if (!$dosendatapribadi) {
            return redirect()->route('dosen.index')->with('error', 'No corresponding dosen record found.');
        }
        if (!$dosendatapribadi->kelas_id) {
            return redirect()->route('dosen.index')->with('error', 'You do not have permission to access this page.');
        }
        $requests = requests::where('kelas_id', $dosendatapribadi->kelas_id)->get();
    
        return view('dosen.request', compact('requests'));
    }
    

    public function approveRequest($id)
    {
        $request = Requests::findOrFail($id); 
        $mahasiswa = $request->mahasiswa;
    
        if ($mahasiswa->edit) {
            return redirect()->route('dosen.request')->with('error', 'Request has already been approved for editing.');
        }
    
        $mahasiswa->edit = true; 
        $mahasiswa->save();
    
        $request->delete();
    
        return redirect()->route('dosen.request')->with('message', 'Request approved, student can now edit their data.');
    }

    public function rejectRequest($id)
    {
        $request = requests::findOrFail($id); 
        $request->delete();
    
        return redirect()->route('dosen.request')->with('message', 'Request rejected.');
    }
    
    public function create() {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->merge([
            'email' => trim($request->email),
            'username' => trim($request->username),
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:dosen,nip', // Ensure NIP is unique
            'kode_dosen' => 'required|integer|unique:dosen,kode_dosen', // Ensure kode_dosen is unique
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'kelas_id' => 'nullable',
        ]);
    
        try {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $dosen = Dosen::create([
                'name' => $request->name,
                'kelas_id' => $request->kelas_id,
                'nip' => $request->nip,
                'kode_dosen' => $request->kode_dosen, // Add kode_dosen to the insert
                'user_id' => $user->id,  // Link to the newly created user
            ]);
    
            return redirect()->route('kaprodi.index')->with('success', 'Dosen berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error adding lecturer: ' . $e->getMessage());
            return redirect()->back()->withErrors('Gagal menambahkan dosen. Silakan coba lagi.')->withInput();
        }
    }
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);

        // Optionally delete the linked user account
        User::where('id', $dosen->user_id)->delete();

        // Delete the lecturer
        $dosen->delete();

        return redirect()->route('kaprodi.index')->with('success', 'Dosen berhasil dihapus.');
    }
}
