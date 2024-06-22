<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return response([
            'message' => 'Data berhasil ditampilkan',
            'data' => Siswa::all()
        ], 200);
    }
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required',
        ]);

        return response([
            'message' => 'Data berhasil diinput',
            'data' => Siswa::create($validator)
        ], 200);
    }
    public function show(string $id)
    {
        try {
            return response([
                'message' => 'Data berhasil ditampilkan',
                'data' => Siswa::findOrFail($id)
            ], 200);
        } catch (\Throwable $th) {
            return response([
                'message' => 'Data tidak ada'
            ], 400);
        }
    } 
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required',
            'alamat' => 'required|string',
            'sekolah_id' => 'required',
        ]);
        $data = Siswa::find($id);
        $data->update($validator);
        return response([
            'message' => 'Data berhasil diubah',
            'data' => $data
        ], 200);
    }
    public function destroy(string $id)
    {
        Siswa::find($id)->delete();
        return response([
            'message' => 'Data berhasil dihapus'
        ], 200);
    }
}
