<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampung=kategori::all(); //mengambil semua isi dari tabel/model
        return view('kategori.halamanutamakatagori')->with('kategori',$tampung);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          //
          return view('kategori.halamanisikatagori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kategori::create($request->all());
        return redirect()->route("kategori.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampung=kategori::find($id);
        return view('kategori.halamantampilkatagor')->with('isi',$tampung);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find=kategori::find($id);
        return view('kategori.halamaneditkatagori')->with('katagori',$find);
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
        kategori::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
        return redirect()->route("kategori.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        kategori::destroy($id);
        return redirect()->route("kategori.index");
    }
}
