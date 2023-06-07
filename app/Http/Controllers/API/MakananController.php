<?php

namespace App\Http\Controllers\API;
use App\Models\Makanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()

    {
        $makanans = Makanan::all();

        return response()->json($makanans);
    }
}
