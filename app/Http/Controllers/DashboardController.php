<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //fungsi home
    public function home()
    {
        $data['judul'] = 'Laman Home';
        $data['isi'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure quasi ullam sapiente dolore nisi accusantium aspernatur et, itaque nam praesentium architecto consectetur labore quae provident ea repudiandae molestias consequatur. Eaque?';
        return view('home',$data);
    }

    public function gallery() 
    {
        $data['judul'] = 'Gallery Foto';
        return view('gallery',$data);
    }

    public function about() 
    {
        $data['judul'] = 'About';
        return view('about',$data);
    }
}
