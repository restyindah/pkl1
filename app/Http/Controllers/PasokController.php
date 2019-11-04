<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasok;
use Session;


class PasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasok = Pasok::orderby('created_at', 'desc')->get();
        return view('backend.pasok.index', compact('pasok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $pasok = Pasok::all();
        return view('backend.pasok.create',compact('pasok'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasok = new pasok;
        $pasok->jumlah = $request->jumlah;
        $pasok->tanggal = $request->tanggal;

    $pasok->save();
    Session::flash("flash_notification", [
        "level" => "succes",
        "message" => "Berhasil menyimpan data <b>$pasok->id</b>!"
    ]);
    return redirect()->route('pasok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pasok = Pasok::findOrFail($id);
        return view('Pasok.show', compact('pasok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasok = Pasok::findOrFail($id);
        return view('backend.pasok.edit', compact('pasok'));
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
        $pasok = new pasok;
        $pasok->id = $request->id;
        $pasok->jumlah = $request->jumlah;
        $pasok->tanggal = $request->tanggal;

    $pasok->save();
    Session::flash("flash_notification", [
        "level" => "warning", "message" => "Berhasil edit data <b>" . $pasok->id . "</b>"
    ]);
    return redirect()->route('pasok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasok = Pasok::findOrFail($id);
        $pasok->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data artikel berjudul <b>$pasok->kode</b>!"
        ]);
        return redirect()->route('pasok.index');
    }
}
