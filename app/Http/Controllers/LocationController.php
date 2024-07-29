<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Province;

class LocationController extends Controller
{
    public function getKelurahan()
    {   $kelurahan = Kelurahan::all();
        return response()->json($kelurahan);
    }

    public function getKecamatan(Request $request)
    {
        $kelurahan_id = $request->kelurahan_id;
        $kecamatan = Kecamatan::where("kelurahan_id", $kelurahan_id);
        return response()->json($kecamatan);
    }

    public function getProvince(Request $request)
    {
        $kecamatan_id = $request->kecamatan_id;
        $province = Province::where("kecamatan_id", $kecamatan_id);
        return response()->json($kelurahan_id);
    }
}
