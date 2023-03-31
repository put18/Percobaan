@extends('layout/apps')

@section('content')
    
<div class="container m-5">
    <form action="{{ url('/store')}}" method="POST">
        @csrf
            <select class="form-select mt-3 @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori" aria-label="Default select example">
                <option selected>--Pilih Kategori Aplikasi--</option>
                    {{-- @foreach ($categories as $item)
                        <option value="{{ $item->id }}"> {{ $item->category_name }}</option>
                    @endforeach                                --}}
                    <option value="Mikanin">Makanan</option>
                    <option value="Minumin">Minumin</option>
            </select>  
            @error('kategori_id')
                <div class="invalid-feedback">
                    Pilih salah satu kategori
                </div>
            @enderror 
            <label for="aplikasi" class="form-label mt-3">Nama Menu</label>
            <input type="text" name="barang" id="aplikasi" class="form-control @error('name') is-invalid @enderror">
                @error('barang')
                    <div class="invalid-feedback">
                        Nama Aplikasi tidak boleh kosong
                    </div>
                @enderror
            <label for="harga" class="form-label mt-3">Harga</label>
            <input type="text" name="price" id="harga" class="form-control @error('price') is-invalid @enderror">
            @error('harga')
                    <div class="invalid-feedback">
                        Harga tidak boleh kosong
                    </div>
                @enderror
            <label for="deskripsi" class="form-label mt-3">Deskripsi</label>
            <div class="form-floating text-muted">
                <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Tambah Deskripsi</label>
            </div>
            <button class="btn btn-primary mt-3">Tambah Aplikasi</button>
        </form>
</div>

@endsection