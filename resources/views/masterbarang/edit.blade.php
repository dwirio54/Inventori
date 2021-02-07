@extends('layouts.app')

@section('content')
<div class='container'>
     <div class="row justify-content-center">
         <div class="col-md-6">
                <div class="card"> 
                      <div class="card-body">
                        <form action="{{route('master-barang.update', $barang->id)}}" method="post">
                           @csrf
                           @method('PATCH')
                           <div class="form-group">
                               <label for="kode_barang">Kode Barang</label>
                               <input type="text" name="kode_barang" id="kode_barang" value="{{$barang->kode_barang}}" class="form-control">
                             </div>
                             <div class="form-group">
                               <label for="nama_barang">Nama Barang</label>
                               <input type="text" name="nama_barang" id="nama_barang" value="{{$barang->nama_barang}}" class="form-control">
                            </div>
                            <div class="form-group">
                               <label for="nama_barang">Suplier</label>
                              <select name="suplier_id" id="suplier_id" value="{{$barang->suplier_id}}" class="form-control">
                              @foreach ($supliers as $suplier)
                               <option value="{{$suplier->id}}">{{$suplier->name}}</option>
                               @endforeach
                               </select>
                            </div>
                          <div class="from-group">
                             <label for="quantity">Quantity</label>
                             <input type="number" name="quantity" id="quantity" class="form-control">
                          </div>
                          <div>
                              <button class="btn btn-outline-info btrn-block">Simpan</button>
                         </div>
                     </form>
                 </div>
              <div>
         </div>
    </div>
</div>


@endsection