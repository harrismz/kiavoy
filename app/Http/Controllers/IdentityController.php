<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Job;
use App\Models\BloodType;
use App\Models\Religion;

class IdentityController extends Controller
{
    public function getEducation() {
        $education = Education::all();

        // Mengecek apakah user ditemukan
        if ($education) {
            // Mengembalikan response jika education ditemukan
            $education = $education->sortBy('education_name');
            return response()->json($education, 200);
        } else {
            // Mengembalikan response jika education tidak ditemukan
            return response()->json(['message' => 'education not found.'], 404);
        }
    }

    public function getJob() {
        $jobs = Job::all();

        // Mengecek apakah user ditemukan
        if ($jobs) {
            // Mengembalikan response jika jobs ditemukan
            $jobs = $jobs->sortBy('job_name');
            return response()->json($jobs, 200);
        } else {
            // Mengembalikan response jika jobs tidak ditemukan
            return response()->json(['message' => 'jobs not found.'], 404);
        }
    }

    public function getBloodType() {
        $bloodTypes = BloodType::all();
        return response()->json($bloodTypes);
    }

    public function getReligion() {
        $religions = Religion::all();
        return response()->json($religions);
    }








    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $education = Education::all();

    //     // Mengecek apakah user ditemukan
    //     if ($education) {
    //         // Mengembalikan response jika education ditemukan
    //         $education = $education->sortBy('education_name');
    //         return response()->json($education, 200);
    //     } else {
    //         // Mengembalikan response jika education tidak ditemukan
    //         return response()->json(['message' => 'education not found.'], 404);
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
