<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori=Kategori::get();
        //Kategori dari nama file model
        //get mengambil semua data dari database
        return view('kategori.index',['category'=>$kategori]);
        //category adalah nama variable baru yang mau dikirim ke view
        //$kategori mengambil variable diatas
        //Kategori adalah nama file model

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.tambah');
    }
    //untuk menampilkan tambah data

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori'=>$request->kategori,
        ]);
        return redirect('/kategori');
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
        $kategori=Kategori::find($id);
        return view('kategori.edit',['category'=>$kategori]);
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
        Kategori::find($id)->update([
        'nama_kategori'=>$request->kategori,
        ]);
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::find($id)->delete();
        return redirect('/kategori');
    }
}
// Kategori::find($id)->delete() untuk menemukan data berdasarkan id kemudian dihapus 