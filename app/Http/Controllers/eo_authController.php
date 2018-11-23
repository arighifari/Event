<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\None;
use Illuminate\Http\Request;
use App\eo_auth;
use App\event;

class eo_authController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:eo_auth',['only' => 'dashboard','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $events = event::where('eo_id', NULL)->get();
        return view('EODashboard' , [
            'events' => $events
        ]);
    }

    public function mybooking(){
        $events = event::where('eo_id', session('login_eo_auth_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->get();
        return view('EODashboard' , [
            'events' => $events
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loginEO.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'no_telp'       => 'required',
            'alamat'        => 'required'
        ]);

        $admins = new eo_auth;
        $admins->nama = $request->name;
        $admins->email = $request->email;
        $admins->password=bcrypt($request->password);
        $admins->no_telp = $request->no_telp;
        $admins->alamat = $request->alamat;
        $admins->save();
        return redirect()->route('eo.auth.login');
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
