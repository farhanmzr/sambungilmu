<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SambungilmuController extends Controller
{
	public function awal()
	{
		return view ('welcome');
	}
    public function create()
	{
		return view ('form_buat_mahasiswa');
	}
	public function show()
	{
		$getdata = DB::table('mahasiswa')->select('nama', 'nim', 'id')-> get();
    	// dd($getdata);
		return view ('template')->with('mahasiswas', $getdata);
	}
    public function add(Request $request)
    {
    	$nama = $request->input('nama');
    	$nim = $request->input('nim');
    	$create = DB::table('mahasiswa')->insert(
    		['nama' => $nama, 'nim' => $nim]
    	);
    	
    	
	    return redirect()->route('create_form');
    }
    public function edit($id)
    {
    	// $getdata = DB::table('mahasiswa')->where('id',$id)-> get();
    	$getdata2 = DB::table('mahasiswa')->find($id);
    	// dd($getdata);
    	return view ('edit')->with ('mahasiswa', $getdata2);
    }

 public function update(Request $request)
    {
    	$nama = $request->input('nama');
    	$nim = $request->input('nim');
    	$id = $request->input('id');
    	$update = DB::table('mahasiswa')
    				->where('id', $id)
    				->update(
    		['nama' => $nama, 'nim' => $nim]);
    	
    	
	    return redirect()->route('tekkom_index');
}

public function delete($id)
{
    DB::table('mahasiswa')->where('id', $id)->delete();
    return redirect()->route('tekkom_index');
}
}