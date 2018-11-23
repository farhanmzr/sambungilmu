<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class matkul extends Controller
{
            public function awal()
        {
            return view ('welcome');
        }
        public function create()
        {
            return view ('form_buat_matkul');
        }
        public function show()
        {
            $getdata = DB::table('matkul')->select('nama')-> get();
            // dd($getdata);
            return view ('tampilanmatkul')->with('matkuls', $getdata);
        }
        public function add(Request $request)
        {
            $nama = $request->input('nama');
            $create = DB::table('matkul')->insert(
                ['nama' => $nama]
            );
                      
            return redirect()->route('matkul_create');
        }
        
}//

