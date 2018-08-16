<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kendaraan = kendaraan::where('status', 0)
               ->orderBy('nama', 'desc')
               ->get();

        return view('pages.kendaraan.index', ['kendaraan' => $kendaraan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
        'nama' => 'required|max:255',
        'warna' => 'required|max:255',
        'nopol' => 'required|max:15',
        'detail' => 'required|min:8',
        'harga' => 'required|min:3'
        ]);

        $newKendaraan = new kendaraan;
        $newKendaraan->nama = $request->nama;
        $newKendaraan->warna = $request->warna;
        $newKendaraan->nopol = $request->nopol;
        $newKendaraan->detail = $request->detail;
        $newKendaraan->harga = $request->harga;
        $newKendaraan->user_id = Auth::id();

        $newKendaraan->save();
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
