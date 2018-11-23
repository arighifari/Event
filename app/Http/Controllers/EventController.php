<?php

namespace App\Http\Controllers;

use App\event;
use App\User;
use Illuminate\Http\Request;
use Auth;


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

    public function cek(){
        return session()->all();
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
            'user_id'=> session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'),
            'nama_Event'=> $request->nama_Event,
            'alamat_Event'=> $request->alamat_Event,
            'Kota'=> $request->Kota,
            'Kategori'=> $request->Kategori,
            'deskripsi_Event'=> $request->deskripsi_Event,
            'harga_Event'=> $request->harga_Event,
            'jadwal_Event'=> $request->jadwal_Event,
            'Gambar'=> $path
        ]);
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
    public function edit($event)
    {
        $tampung = event::where('id', $event);
        $tampung->update([
            'eo_id' => session('login_eo_auth_59ba36addc2b2f9401580f014c7f58ea4e30989d'),
        ]);
        return redirect('eo');
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