@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <a href="{{route('suplier.create')}}" class="btn btn-info">Tambah Suplier baru</a>
                            </div>
                        <form action="{{route('laporan.periode.suplier')}}" method="GET">
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
                                    </div>
                                </div>
                                <div>
                                <button class="btn btn-info"> Cari data </button>
                             </div>
                         </div>                 
                </form>
            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Suplier</th>
                                    <th>Nama Suplier</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($supliers as $suplier)
                                <tr>
                                    <td>{{$suplier->kode_suplier}}</td>
                                    <td>{{$suplier->nama}}</td>
                                    <td>{{$suplier->alamat}}</td>
                                    <td>{{$suplier->email}}</td>
                                    <td>{{$suplier->phone}}</td>
                                    <td>
                                        <form action="{{route('suplier.delete', $suplier->id)}}" method="post">
                                        @csrf 
                                        @method('DELETE')
                                            <a href="{{route('suplier.edit',$suplier->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection