<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guruM= Guru::all();
        return view('guru.guru_dashboard',compact('guruM'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.guru_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'namaguru' => 'required',
            'mapel' => 'required',
        ]);

        Guru::create($request->post());
        return redirect()->route('guru.index')->with('success', 'Data Guru Berhasil ditambahkan');
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
        $guru = Guru::find($id);
        return view('guru.guru_edit',compact('guru'));
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
        $request->validate([
            'nip' => 'required',
            'namaguru' => 'required',
            'mapel' => 'required',
        ]);

        $data=request()->except(['_token','_method','submit']);
        Guru::where('id',$id)->update($data);
        return redirect()->route('guru.index')->with('success', 'Data Guru Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guru::where('id',$id)->delete();
        return redirect()->route('guru.index')->with('success', 'Data Guru Berhasil dihapus');
    }
}
