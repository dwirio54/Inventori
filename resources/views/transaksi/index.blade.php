@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="alert alert-info" role="alert"> Ini Adalah Data Tranksaksi terakhir </div>
</div>
</div>
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Barang Masuk</a>
                <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger">Tambah Transaksi Keluar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Tgl Transaksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($transactions as $transaction) 
                        <tr>
                            <td>{{$transaction->kode_transaksi }}</td>
                            <td>{{$transaction->suplier->nama}}</td>
                            <td>{{$transaction->barang->nama_barang}}</td>
                            <td>{{$transaction->created_at->toDateString()}}</td>
                        </tr>
                        @endforeach
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
