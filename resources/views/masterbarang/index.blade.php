@extends('layouts.app')

@section('content')
<div class="container">
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
            </div>
            <div class="d-flex">
                <input type="date" name="" id="" class="form-control mr-2">
                <button type="submit" class="btn btn-primary ml-2">Cari Data</button>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NDT-22-2021-124</td>
                    <td>PT Nasi Daging Tiren</td>
                    <td>Nasi Ayam Tiren</td>
                    <td>20</td>
                    <td>
                        <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{route('master-barang.show')}}" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>CD-441-413-89</td>
                    <td>PT Redkt</td>
                    <td>CD CP2077</td>
                    <td>10</td>
                    <td>
                        <a href="Edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="Edit" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="Edit" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>RUSH-324-226-11</td>
                    <td>PT RUSH.ID</td>
                    <td>Baju</td>
                    <td>20</td>
                    <td>
                        <a href="Edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="Edit" class="btn btn-outline-primary btn-sm">Detail</a>
                        <a href="Edit" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
