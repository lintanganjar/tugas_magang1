<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index() {
        
        $kelas = Kelas::with('dosen')->get('name');
        return view('kaprodi.index', compact('kelas'));
    }

    public function edit($id) {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'jumlah' => 'required|integer', // Add validation rule
            'kode_kelas' => 'required|integer'
        ]);
    
        $kelas = Kelas::findOrFail($id);
        $kelas->name = $request->nama_kelas;
        $kelas->jumlah = $request->jumlah;
        $kelas->kode_kelas = $request->kode_kelas;
        $kelas->save();

        return redirect()->route('kaprodi.index');
    }
    public function create() {
        return view('kelas.create');
    }

    // Menyimpan data kelas baru
    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'kode_kelas' => 'required|integer',
        ]);

        Kelas::create([
            'name' => $request->nama_kelas,
            'jumlah' => $request->jumlah,
            'kode_kelas' => $request->kode_kelas,
        ]);

        return redirect()->route('kaprodi.index')->with('success', 'Kelas baru berhasil ditambahkan');
    }

    // Menghapus kelas
    public function destroy($id) {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kaprodi.index')->with('success', 'Kelas berhasil dihapus');
    }
}
