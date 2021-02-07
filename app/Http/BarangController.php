<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();

        return view('MasterBarang.index', compact('barangs'));
        
    }

}
