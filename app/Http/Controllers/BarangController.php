<?php

namespace App\Http\Controllers;
use App\Models\barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $data = barang::all();
        return view('barang.index',["data" => $data]);
    }

    public function storeBarang(Request $request){
        $addBarang = barang::create([
            'nama_barang' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/');
    }

    public function editPage($id){
        $dataBarang = barang::find($id);
        return view('barang.edit',['data'=> $dataBarang]);
    }

    public function editBarang(Request $request){
        $dataBarang = barang::find($request->id);

        $dataBarang->update([
            'nama_barang' => $request->nama,    
            'harga' => $request->harga,    
            'stok' => $request->stok,    
        ]);

        return redirect('/');
    }

    public function deleteBarang($id){
        $deleteBarang = barang::where('id', $id)->delete();

        return redirect('/');
    }
}
