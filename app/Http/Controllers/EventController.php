<?php

namespace App\Http\Controllers;

use App\event;
use App\User;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('InputEvent' , [
            'users' => $users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path = $request->file('Gambar')->store('Gambar', 'public');
        Event::create([
            'user_id'=> $request->user_id,
            'nama_Event'=> $request->nama_Event,
            'alamat_Event'=> $request->alamat_Event,
            'Kota'=> $request->Kota,
            'Kategori'=> $request->Kategori,
            'deskripsi_Event'=> $request->deskripsi_Event,
            'harga_Event'=> $request->harga_Event,
            'jadwal_Event'=> $request->jadwal_Event,
            'Gambar'=> $path
        ]);
//          $path2 = Storage::putFile('Gambar', $request->file('Gambar'));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        //
    }
}
