<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // Mendapatkan data barang bersama dengan data kategori yang terkait
        $barangs = Barang::with('kategori')->get();

        // Render view dengan barangs
        return view('barang.index', compact('barangs'));
    }
}
