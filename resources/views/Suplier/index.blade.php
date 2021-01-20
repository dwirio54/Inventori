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
                            <div>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="date" name="" class="form-control" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="date" name="" class="form-control" id="">
                                            </div>
                                        </div>
                                        <div>
                                        	<button class="btn btn-info"> Cari data </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Suplier</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PT.Nasi Ayam Tiren</td>
                                    <td>Cileungsi</td>
                                    <td>AyamTirenNgenah@gmail.com</td>
                                    <td>+62 4646</td>
                                    <td>
                                        <form action="">
                                            <a href="{{route('suplier.edit')}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection