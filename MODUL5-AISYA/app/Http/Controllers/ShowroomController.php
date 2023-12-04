<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Http\Requests\StoreShowroomRequest;
use App\Http\Requests\UpdateShowroomRequest;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showroom = Showroom::all();

        return view('showroom.showrooom', compact('showroom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('showroom.addShowroom');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShowroomRequest $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'brand' => 'required',
            'warna' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
        ]);

        Showroom::create([
            'nama_mobil' => $request->name,
            'brand_mobil' => $request->brand,
            "warna_mobil" => $request->warna,
            "tipe_mobil" => $request->tipe,
            "harga_mobil" => $request->harga
        ]);

        return redirect()->route('showroom.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Showroom $showroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showroom $showroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShowroomRequest $request, Showroom $showroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Showroom $showroom)
    {
        //
    }
}
