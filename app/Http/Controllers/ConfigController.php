<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function getAppUrl()
    {
        return response()->json([
            // 'baseUrl' => env('APP_URL'),
            'baseUrl' => config('app.url'),
        ]);
    }
}
