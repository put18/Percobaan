@extends('layout/apps')

@section('content')
    
<div class="container m-5">
    <form action="{{url('/kategori')}}" method="POST">
        @csrf 
            <label for="aplikasi" class="form-label mt-3">nama_kategori</label>
            <input type="text" name="kategori" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('barang')
                    <div class="invalid-feedback">
                        Nama Kategori tidak boleh kosong
                    </div>
                @enderror
            
            <button class="btn btn-primary mt-3">Tambah kategori</button>
        </form>
</div>

@endsection