@extends('layout.apps')

@section('content')

        <h4 class="m-3">Daftar Kategori</h4>

        <a href="{{url('/kategori/create')}}" class="btn btn-primary fw-bold m-3">+ Kategori</a>
            {{$category}}
            <div class="d-flex">
                @foreach ($category as $item)
                <div class="card m-3" style="width: 13rem;">
                    <img src="{{ asset('assets/img/makanan.png') }}" class="card-img-top" alt="gambar {{$item->nama_kategori}}">
                    <div class="card-body">
                    <h5 class="card-title"> {{$item->nama_kategori}} </h5>
                    <a href="/kategori/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{url('kategori/'.$item->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                </div>
               @endforeach 
            </div>
@endsection
{{-- nama_kategori diambil dari colom database --}}
{{-- alt pada garis 12 komen tidak ada gambar --}}


