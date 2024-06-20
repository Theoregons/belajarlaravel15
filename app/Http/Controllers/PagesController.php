<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $data = ['meja', 'kursi', 'pintu', 'lampu', 'buku', 'bolpoin', 'pensil'];
        // return view('tabel', ['data' => $data, 'barang' => $data]);
        return view('tabel', compact('data'));
    }
    public function about() {
        return view('about');
    }
    public function home() {
        return view('home');
    }
}
