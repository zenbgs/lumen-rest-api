<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
  public function index()
  {
    $matkul = Matkul::all();
    return response()->json($matkul);
  }

  public function show($id)
  {
    $matkul = Matkul::find($id);
    return response()->json($matkul);
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      "nama_matkul" => "required",
      "sks_matkul" => "required",
      "dosen_matkul" => "required",
      "id_matkul" => "required|unique:matkul",
    ]);

    $data = $request->all();
    $matkul = Matkul::create($data);

    return response()->json($matkul);
  }

  public function update(Request $request, $id)
  {
    $matkul = Matkul::find($id);

    if (!$matkul) {
      return response()->json(['message' => 'Data not found'], 404);
    }

    $this->validate($request, [
      "nama_matkul" => "required",
      "sks_matkul" => "required",
      "dosen_matkul" => "required",
      "id_matkul" => "required",
    ]);

    $data = $request->all();
    $matkul->fill($data);
    $matkul->save();

    return response()->json($matkul);
  }

  public function destroy($id)
  {
    $matkul = Matkul::find($id);

    if (!$matkul) {
      return response()->json(['message' => 'Data not found'], 404);
    }

    $matkul->delete();

    return response()->json(['message' => 'Data deleted successfully'], 200);
  }
}
