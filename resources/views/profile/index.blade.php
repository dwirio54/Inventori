@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                            <a href="{{route('profile.create')}}" class="btn btn-info">Tambah Profile baru</a>
                            </div>
                            <div>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Usia</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Hobby</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($profiles as $profile)
                                <tr>
                                    <td>{{$profile->name}}</td>
                                    <td>{{$profile->usia}}</td>
                                    <td>{{$profile->tempat_lahir}}</td>
                                    <td>{{$profile->tanggal_lahir}}</td>
                                    <td>{{$profile->jenis_kelamin}}</td>
                                    <td>{{$profile->hobby}}</td>
                                    <td>
                                        <form action="{{route('profile.delete', $profile->id)}}" method="post">
                                        @csrf 
                                        @method('DELETE')
                                            <a href="{{route('profile.edit',$profile->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                            <a href="{{ route('profile.show', $profile->id ) }}" class="btn btn-outline-info btn-sm">Detail</a>
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