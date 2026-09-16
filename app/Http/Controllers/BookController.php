<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private array $daftarBuku = [
        1 => ['judul' => 'Menjadi Sukses', 'penulis' => 'Oka Sukacita'],
        2 => ['judul' => 'Aku Anak Tuhan', 'penulis' => 'Josep Iskandar'],
        3 => ['judul' => 'Tidak ada yang Sempurna', 'penulis' => 'Kevin Junior'],
    ];

    public function index()
    {
        return view('buku.index', ['daftarBuku' => $this->daftarBuku]);
    }

    public function show($id)
    {
        $buku = $this->daftarBuku[$id] ?? null;
        return view('buku.show', ['buku' => $buku, 'id' => $id]);
    }
}