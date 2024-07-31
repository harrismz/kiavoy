<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodType;

class BloodTypeController extends Controller
{
    public function index()
    {
        $bloodTypes = BloodType::all();
        return response()->json($bloodTypes);
    }
}
