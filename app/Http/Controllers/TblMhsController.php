<?php

namespace App\Http\Controllers;

use App\Models\Tbl_mhs;
use Illuminate\Http\Request;

class TblMhsController extends Controller
{
    public function index(){
        $data = Tbl_mhs::all();
        return view('datamhs',compact('data'));
    }
    public function tambahmahasiswa(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        //dd($request->all());
        $data = Tbl_mhs::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomhs/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Ditambahkan');
    }
    public function tampilkandata($id){
        $data = Tbl_mhs::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Tbl_mhs::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Diupdate');
    }
    public function delete($id){
        $data = Tbl_mhs::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Dihapus');

    }
    
}
