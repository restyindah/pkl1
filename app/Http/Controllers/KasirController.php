<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasir;
use Session;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $kasir = Kasir::orderBy('created_at', 'desc')->get();
        return view('backend.kasir.index', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasir = Kasir::all();
        return view('backend.kasir.create',compact('kasir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kasir = new kasir();
        $kasir->nama = $request->nama;
        $kasir->alamat = $request->alamat;
        $kasir->telepon = $request->telepon;
        $kasir->status = $request->status;
        $kasir->username = $request->username;
        $kasir->password = $request->password;
        $kasir->akses = $request->akses;

    $kasir->save();
    Session::flash("flash_notification", [
        "level" => "succes",
        "message" => "Berhasil menyimpan data <b>$kasir->id</b>!"
    ]);
    return redirect()->route('kasir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('Kasir.show', compact('kasir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('backend.kasir.edit', compact('kasir'));
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
        $kasir = new kasir();
        $kasir->nama = $request->nama;
        $kasir->alamat = $request->alamat;
        $kasir->telepon = $request->telepon;
        $kasir->status = $request->status;
        $kasir->username = $request->username;
        $kasir->password = $request->password;
        $kasir->akses = $request->akses;


    $ $kasir->save();
    Session::flash("flash_notification", [
        "level" => "warning", "message" => "Berhasil edit data <b>" . $kasir->id . "</b>"
    ]);
    return redirect()->route('kasir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);

        $kasir->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data artikel berjudul <b>$kasir->kode</b>!"
        ]);
    }
}
