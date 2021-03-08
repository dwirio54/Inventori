<?php

namespace App\Http\Controllers\Transaksi;

use App\Barang;

use App\Suplier;

use App\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangKeluarController extends Controller
{
    public function create()
    {
        $data = [
            
            'barangs' => Barang::all(),

            'supliers' => Suplier::all(),

        ];
        
        
        return view('transaksi.create', $data);
    }
    public function store(Request $request)
    {
        $transaksi = Transaction::create([
            'suplier_id' => $request->suplier_id,
            'barang_id' => $request->barang_id,
            'quantity' => $request->quantity,
        ]);
        
        if ($transaksi->save()) {
            $barang = Barang::findOrFail($transaksi->barang_id);

            $hitung = $barang->quantity - $transaksi->quantity;
            $barang->update([
                'quantity' => $hitung,
            ]);
        };
        flash()->success('Transaksi keluar berhasil di Buat');
        return redirect()->back();

    }
}
