<?php

namespace App\Http\Controllers\MasterBarang;

use App\Barang;
use App\Suplier;
use App\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterBarangController extends Controller
{
    public function index()
    {
        $barangs = \App\Barang::all();

        return view('masterbarang.index', compact('barangs'));
    }

    public function create()
    {
       $supliers = suplier::all();
       
        return view('masterbarang.create', compact('supliers'));
    }
    
    public function show($id)
    {
        $barang = Barang::findOrFail($id);


        return view('masterbarang.detail', compact('barang'));
    }


    public function store(Request $request)
    {
        $suplier = Barang::create([
            'suplier_id' => $request->suplier_id,
            'nama_barang' => $request->nama_barang,
            'quantity' => $request->quantity,
        ]);
    
        flash()->success('Data Barang berhasil ditambahkan');

    return redirect()->back();
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $supliers = Suplier::all();

        return view('masterbarang.edit', compact('supliers', 'barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::where('id', $id)->first();
        
        $barang -> suplier_id = $request->input('suplier_id');
        $barang -> kode_barang = $request->input('kode_barang');
        $barang -> nama_barang = $request->input('nama_barang');
        $barang -> quantity = $request->input('quantity');

        $barang->save();

        flash()->success('Data Berhasil di Ubah');
        return redirect(route('master-barang'));
    }

    
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        flash()->success('Data berhasil di hapus');

        return redirect()->back();

    }

}
