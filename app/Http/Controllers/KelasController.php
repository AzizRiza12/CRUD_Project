<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kelas::all();
        return view('pages/kelas/index')->with([
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/kelas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $new_kelas = new kelas();
       $new_kelas->Nama = $request->get('Nama');
       $new_kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($Kelas_id)
    {
        $data = Kelas::findOrFail($Kelas_id);
        return view('pages/kelas/edit')->with([
            'data'=>$data
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kelas_id)
    {
        $kelas = Kelas::findOrFail($Kelas_id);
        $kelas->Nama = $request->get('Nama');
        $kelas->save();

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kelas_id)
    {
        $data = kelas::findOrFail($Kelas_id);
        $data->delete();

        return redirect()->route('kelas.index');
    }
}
