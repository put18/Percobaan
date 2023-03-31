@extends('layout.apps')

@section('content')

        <h4 class="m-3">Daftar Produk</h4>

        <a href="{{url('/produk/create')}}" class="btn btn-primary fw-bold m-3">+ Produk</a>
            {{$product}}
            <div class="d-flex">
                @foreach ($product as $item)
                <div class="card m-3" style="width: 13rem;">
                    <img src="{{ asset('assets/img/makanan.png') }}" class="card-img-top" alt="gambar {{$item->nama_produk}}">
                    <div class="card-body">
                    <h5 class="card-title"> {{$item->nama_barang}} </h5>
                    </form>
                    </div>
                </div>
               @endforeach 
            </div>
@endsection
{{-- nama_kategori diambil dari colom database --}}
{{-- alt pada garis 12 komen tidak ada gambar --}}


