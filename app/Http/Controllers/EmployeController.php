<?php

namespace App\Http\Controllers;

// load model Employe
use App\Models\Employe;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //fungsi tampil data
    public function index() 
    {
        $data['judul'] = 'CRUD data Employe';
        //sama dengan query SELECT
        $data['employes'] = Employe::all(); 
        return view('tampil_data',$data);
    }
}
