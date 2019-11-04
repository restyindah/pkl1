<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use Session;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::orderBy('created_at', 'desc')->get();
        return view('backend.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        return view('backend.penjualan.create',compact('penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan = new penjualan();
        $penjualan->bukus_id = $request->bukuid;
        $penjualan->kasirs_id = $request->kasirid;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total = $request->total;
        $penjualan->tanggal = $request->tanggal;

    $penjualan->save();
    Session::flash("flash_notification", [
        "level" => "succes",
        "message" => "Berhasil menyimpan data <b>$penjualan->id</b>!"
    ]);
    return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('Penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('backend.penjualan.edit', compact('penjualan'));
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
        $penjualan = new penjualan();
        $penjualan->bukus_id = $request->bukuid;
        $penjualan->kasirs_id = $request->kasirid;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total = $request->total;
        $penjualan->tanggal = $request->tanggal;


    $penjualan->save();
    Session::flash("flash_notification", [
        "level" => "warning", "message" => "Berhasil edit data <b>" . $penjualan->id . "</b>"
    ]);
    return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);

        $penjualan->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data artikel berjudul <b>$penjualan->kode</b>!"
        ]);
    }
}
