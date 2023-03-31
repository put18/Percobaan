@extends('layout/apps')

@section('content')
    
<div class="container m-5">
    <form action="{{url('produk/'.$products->id)}}" method="POST">
        @method('PUT')
        @csrf

            <label for="aplikasi" class="form-label mt-3">nama_barang</label>
            <input value='{{$products->nama_barang}'type="text" name="barang" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('barang')
                    <div class="invalid-feedback">
                        Nama Produk tidak boleh kosong
                    </div>
                @enderror
            
            <button class="btn btn-primary mt-3">Edit produk</button>
        </form>
</div>

@endsectionp