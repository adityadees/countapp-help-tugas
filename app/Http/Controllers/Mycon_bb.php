<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku_besar;

class Mycon_bb extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku_besars = Buku_besar::all();
        return view('index',compact('buku_besars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $buku_besars = new Buku_besar();
     $buku_besars->bb_referensi = $request->get('referensi');
     $buku_besars->bb_tanggal = $request->get('tanggal');
     $buku_besars->bb_keterangan = $request->get('keterangan');
     $buku_besars->bb_kode = $request->get('kode');
     $buku_besars->bb_akun = $request->get('akun');
     $buku_besars->bb_dept = $request->get('dept');
     $buku_besars->bb_debit = $request->get('debit');
     $buku_besars->bb_kredit = $request->get('kredit');
     $buku_besars->bb_job = $request->get('job');
     $buku_besars->save();

     return redirect('/')->with('success','Berhasil menambah data');
 }

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
    public function edit($bb_referensi)
    {
      $buku_besars = Buku_besar::find($bb_referensi);
      return view('edit',compact('buku_besars','bb_referensi'));
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bb_referensi)
    {
          $buku_besars= Buku_besar::find($bb_referensi);
        $buku_besars->bb_referensi = $request->get('referensi');
        $buku_besars->bb_tanggal = $request->get('tanggal');
        $buku_besars->bb_keterangan = $request->get('keterangan');
        $buku_besars->bb_kode = $request->get('kode');
        $buku_besars->bb_akun = $request->get('akun');
        $buku_besars->bb_dept = $request->get('dept');
        $buku_besars->bb_debit = $request->get('debit');
        $buku_besars->bb_kredit = $request->get('kredit');
        $buku_besars->bb_job = $request->get('job');
        $buku_besars->save();
        return redirect('/')->with('success','Berhasil merubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bb_referensi)
    {
      $buku_besars = Buku_besar::find($bb_referensi);
        $buku_besars->delete();
        return redirect('/')->with('success','Berhasil menghapus data');
    }
}
