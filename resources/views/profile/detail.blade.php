@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h4></h4>
                        <p></p>
                        <table class="table table-stripped">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$profile->name}}</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>{{$profile->usia}}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>{{$profile->tempat_lahir}}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>{{$profile->tanggal_lahir}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>{{$profile->jenis_kelamin}}</td>
                                </tr>
                                <tr>
                                    <td>Hobby</td>
                                    <td>{{$profile->hobby}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection