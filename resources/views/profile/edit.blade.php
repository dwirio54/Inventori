@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card  ">
                    <div class="card-body">
                        <form action="{{route('profile.update', $profile->id)}}" method="post">
                            @csrf
                                @method('PATCH')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{$profile->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="usia">Usia</label>
                                <input type="text" name="usia" id="usia" value="{{$profile->usia}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="tempat_lahir" name="tempat_lahir" id="tempat_lahir" value="{{$profile->tempat_lahir}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="{{$profile->tanggal_lahir}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$profile->jenis_kelamin}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hobby">Hobby</label>
                                <input type="text" name="hobby" id="hobby" value="{{$profile->hobby}}" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-outline-info btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
