<?php

namespace App\Http\Controllers\Transaksi;

use App\Barang;

use App\Suplier;

use App\Transaction;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $transactions = Transaction::with('barang', 'suplier')->get();

        return view('transaksi.index', compact('transactions'));
    }
}
