<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // untuk menampilkan view
    public function home() {
        $data['judul'] = "Kalkulator Sederhana";
        $data['angka1'] = 0; 
        $data['angka2'] = 0;
        $data['hasil'] = 0;
        return view('kalkulator',$data);
    }

    //fungsi untuk menampilkan hasil
    public function proses(Request $request) {
        $data['judul'] = "Kalkulator Sederhana";
        $data['angka1'] = $request->input('angka1'); 
        $data['angka2'] = $request->input('angka2');
        $data['hasil'] = $data['angka1'] * $data['angka2'];
        return view('kalkulator',$data);
    }
}
