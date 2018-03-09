<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel; //buat nyambungin controler dengan  model
class controlertest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampung=artikel::all(); //mengambil semua isi dari tabel/model
        return view('artikel.halamanutama')->with('artikel',$tampung);
       
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artikel.halamanisidata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        artikel::create($request->all());
        return redirect()->route("article.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampung=artikel::find($id);
        return view('artikel.halamantampil')->with('isi',$tampung);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $find=artikel::find($id);
      return view('artikel.halamaneditdata')->with('article',$find);//berhubungan dengan isi di dalam view
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
       artikel::find($id)->update($request->all());  //find=where data $id hasil lemparan dari halaman lain
       return redirect()->route("article.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        artikel::destroy($id);
        return redirect()->route("article.index");
    }
}
