<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class authController extends Controller
{
    public function form() {
        return view("packes.form");
    }

    public function kirim(request $request) {
        $namaDepan = $request['fname'];
        $namaBelakang = $request['lname'];
       

        return view('packes.welcome', ["namaDepan" => $namaDepan, "namaBelakang" => $namaBelakang]);
 
    
    }
}
