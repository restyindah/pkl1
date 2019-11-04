<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Session;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $buku = Buku::all();
        return view('backend.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        return view('backend.buku.create',compact('buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new buku;
        $buku->id = $request->id;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->hargapokok;
        $buku->harga_jual = $request->hargajual;
        $buku->diskon = $request->diskon;

    $buku->save();
    Session::flash("flash_notification", [
        "level" => "succes",
        "message" => "Berhasil menyimpan data <b>$buku->id</b>!"
    ]);
    return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $buku = Buku::findOrFail($id);
        return view('Buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('backend.buku.edit', compact('buku'));
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
         $buku = new buku;
        $buku->id = $request->id;
        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->hargapokok = $request->hargapokok;
        $buku->hargajual = $request->hargajual;
        $buku->diskon = $request->diskon;

    $buku->save();
    Session::flash("flash_notification", [
        "level" => "warning", "message" => "Berhasil edit data <b>" . $buku->id . "</b>"
    ]);
    return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data artikel berjudul <b>$buku->kode</b>!"
        ]);
    }
}
