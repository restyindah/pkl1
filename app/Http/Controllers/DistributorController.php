<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;
use Session;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = Distributor::orderBy('created_at', 'desc')->get();
        return view('backend.distributor.index', compact('distributor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distributor = Distributor::all();
        return view('backend.distributor.create',compact('distributor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $distributor = new distributor();
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;

    $distributor->save();
    Session::flash("flash_notification", [
        "level" => "succes",
        "message" => "Berhasil menyimpan data <b>$distributor->id</b>!"
    ]);
    return redirect()->route('distributor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('Distributor.show', compact('distributor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('backend.distributor.edit', compact('distributor'));
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
        $distributor= distributor::findOrFail($id);
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;

    $distributor->save();
    Session::flash("flash_notification", [
        "level" => "warning", "message" => "Berhasil edit data <b>" . $distributor->id . "</b>"
    ]);
    return redirect()->route('distributor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distributor = Distributor::findOrFail($id);

        $distributor->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data artikel berjudul <b>$distributor->kode</b>!"
        ]);
        return redirect()->route('distributor.index');
    }
}
