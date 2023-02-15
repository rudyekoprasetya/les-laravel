<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller {
    
    //untuk fungsi home
    public function home() {
        return "<h1>ini adalah controller web</h1>";
    }

    public function profil($nama) {
        return "<h1>Halaman Profile ".$nama."</h1>";
    }

    //memanggil view
    public function biodata() {
        $data['nama'] = "Anni";
        $data['alamat'] = "Surabaya";
        //parsing atau kirim data ke view
        return view('biodata',$data);
    }

}