<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    // CREATE: Menyimpan data baru
    public function store(Request $request)
    {
        $this->validate($request, [
            'NamaBarang' => 'required|string|max:255',
            'DeskripsiBarang' => 'required|string',
        ]);

        $data = $request->all();
        $barang = DataBarang::create($data);

        return response()->json($barang, 201);
    }

    // READ: Mendapatkan semua data
    public function index()
    {
        $data = DataBarang::all();
        return response()->json($data);
    }

    // UPDATE: Mengupdate data berdasarkan IdBarang
    public function update(Request $request, $IdBarang)
    {
        $data = DataBarang::findOrFail($IdBarang);
        $data->update([
            'NamaBarang' => $request->NamaBarang,
            'DeskripsiBarang' => $request->DeskripsiBarang,
        ]);

        return response()->json($data, 200);
    }

    // DELETE: Menghapus data berdasarkan IdBarang
    public function destroy($IdBarang)
    {
        $data = DataBarang::findOrFail($IdBarang);
        $data->delete();

        return response()->json(null, 204);
    }
}
