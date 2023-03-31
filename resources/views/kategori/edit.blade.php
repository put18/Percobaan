@extends('layout/apps')

@section('content')
    
<div class="container m-5">
    <form action="{{url('kategori/'.$category->id)}}" method="POST">
        @method('PUT')
        @csrf

            <label for="aplikasi" class="form-label mt-3">nama_kategori</label>
            <input value='{{$category->nama_kategori}}'type="text" name="kategori" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('barang')
                    <div class="invalid-feedback">
                        Nama Kategori tidak boleh kosong
                    </div>
                @enderror
            
            <button class="btn btn-primary mt-3">Edit kategori</button>
        </form>
</div>

@endsection