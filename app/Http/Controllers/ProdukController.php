<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=Produk::get();
        return view('produk.index',['product'=>$produk]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create([
            'nama_barang'=>$request->produk,
        ]);
        return redirect('/produk');
    }
    //untuk memasukan inputan data ke database
    //baris 47-49 create untuk menambah data, 
    //$request->kategori untuk mengambil data dari inputan user yang ditampilan
    //nama_kategori itu nama colom yang didatabase 
    //'nama_kategori'=>$request->kategori nama kolom yang didatabase dimasukan data dari inputan user yang ditampilan 
    //baris 50 untuk mengarah ke url /kategori

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk=Produk::find($id);
        return view('produk.edit',['Product'=>$produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Produk::find($id)->update([
        'nama_barang'=>$request->produk,
        ]);
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\      Response
     */
    public function destroy($id)
    {
        Produk::find($id)->delete();
        return redirect('/produk');
        
    }
}
// Kategori::find($id)->delete() untuk menemukan data berdasarkan id kemudian dihapus 