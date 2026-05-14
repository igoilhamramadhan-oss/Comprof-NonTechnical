<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index() {
        // Mengambil semua data divisi non teknikal
        $divisis = Divisi::where('kategori', 'Non Teknikal')->get();
        return view('divisi.index', compact('divisis'));
    }
}