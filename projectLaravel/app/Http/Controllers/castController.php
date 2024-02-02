<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class castController extends Controller
{
    public function create(){
        return view('cast.create');
    }
    //VALIDASI
    public function store(request $request){ 
        $validated = $request->validate([
            'name' => 'required',
            'umur' => 'required',

        
        ]);
    //INSERT DATA
    DB::table('cast')->insert([
        'name' => $request ["name"],
        'umur' => $request ["umur"],
        'bio' => $request ["bio"],
        ]);
    //redirect kehalaman cast
        return redirect ('/cast');

    }
    public function index(){
        $cast = DB::table('cast')->get();
    
        return view('cast.index', ["cast" => $cast]);
    }
    public function show($id){
        $castByid = DB::table('cast')->find($id);

        return view('cast.detail',['castByid' => $castByid]);
    }

    public function edit($id){
        $castByid = DB::table('cast')->find($id);

        return view('cast.edit',['castByid' => $castByid]);
    }
    public function update($id, request $request){
           //VALIDASI
           $request->validate([
            'name' => 'required',
            'umur' => 'required',
         ]);
            DB::table('cast')
            ->where('id', $id)
            ->update([
                'name' => $request ["name"],
                'umur' => $request ["umur"],
                'bio' => $request ["bio"],
            ]);
            return redirect ('/cast');
    }
    public function destroy($id){
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
    
}
