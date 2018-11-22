<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eo_auth;

class eo_authController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:eo_auth',['only' => 'index','edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('EODashboard');
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
