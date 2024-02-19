<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        // Mendapatkan data kategori
        $kategoris = Kategori::all();

        // Render view dengan kategoris
        return view('kategori.index', compact('kategoris'));
    }
}
