<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrowdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_crowd = \App\Crowd::all();
        return view('crowd.index',['data_crowd' => $data_crowd]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Crowd::create($request->all());
        return redirect('/crowd')->with('well done','Data Berhasil diinput');
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
        $crowd = \App\Crowd::find($id);
        return view('crowd.edit',['crowd' => $crowd]); 
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
        $crowd = \App\Crowd::find($id);
        $crowd->update($request->all());
        return redirect('/crowd')->with('well done','Data Berhasil Di Edit');
    }

    public function delete($id)
    {
        $crowd = \App\Crowd::find($id);
        $crowd->delete();
        return redirect('/crowd')->with('well done','Data Berhasil Dihapus');
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
