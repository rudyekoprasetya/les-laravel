<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function home() {
        $data['nama'] = "Anton";
        $data['alamat'] = "Malang";
        return view('biodata',$data);
    }
}
