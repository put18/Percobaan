@extends('layout/apps')

@section('content')
    
<div class="container m-5">
    <form action="{{url('/produk')}}" method="POST">
        @csrf 
            <label for="aplikasi" class="form-label mt-3">nama_barang</label>
            <input type="text" name="barang" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('barang')
                    <div class="invalid-feedback">
                        Nama Produk tidak boleh kosong
                    </div>
                @enderror
                <label for="aplikasi" class="form-label mt-3">harga</label>
                <input type="number" name="harga" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                    @error('harga')
                        <div class="invalid-feedback">
                            Nama Produk tidak boleh kosong
                        </div>
                    @enderror
                    <label for="aplikasi" class="form-label mt-3">keterangan</label>
                    <input type="text" name="barang" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                        @error('barang')
                            <div class="invalid-feedback">
                                Nama Produk tidak boleh kosong
                            </div>
                        @enderror
                        <label for="aplikasi" class="form-label mt-3">kategori_id</label>
                        <input type="number" name="barang" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                            @error('barang')
                                <div class="invalid-feedback">
                                    Nama Produk tidak boleh kosong
                                </div>
                            @enderror
            <button class="btn btn-primary mt-3">simpan data</button>
        </form>
</div>

@endsection