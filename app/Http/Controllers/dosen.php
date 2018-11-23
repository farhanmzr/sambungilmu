<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class dosen extends Controller
{
            public function awal()
        {
            return view ('welcome');
        }
        public function create()
        {
            return view ('form_buat_dosen');
        }
        public function show()
        {
            $getdata = DB::table('dosen')->select('nama', 'nip', 'id')-> get();
            // dd($getdata);
            return view ('tampilan')->with('dosens', $getdata);
        }
        public function add(Request $request)
        {
            $nama = $request->input('nama');
            $nip = $request->input('nip');
            $create = DB::table('dosen')->insert(
                ['nama' => $nama, 'nip' => $nip]
            );
                      
            return redirect()->route('dosen_create');
        }
        public function edit($id)
        {
            // $getdata = DB::table('dosen')->where('id',$id)-> get();
            $getdata2 = DB::table('dosen')->find($id);
            // dd($getdata);
            return view ('editdosen')->with ('dosen', $getdata2);
        }
    
     public function update(Request $request)
        {
            $nama = $request->input('nama');
            $nip = $request->input('nip');
            $id = $request->input('id');
            $update = DB::table('dosen')
                        ->where('id', $id)
                        ->update(
                ['nama' => $nama, 'nip' => $nip]);
                       
            return redirect()->route('dosen_index');
    }
    
    public function delete($id)
    {
        DB::table('dosen')->where('id', $id)->delete();
        return redirect()->route('dosen_index');
    }
    }//

