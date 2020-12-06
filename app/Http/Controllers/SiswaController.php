<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::with('Kelas')->get();
        return view('pages/Siswa/index')->with([
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
        $data = Kelas::all();
        return view('pages/Siswa/create')->with([
            'data' => $data,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_siswa = new Siswa();
        $new_siswa->Kelas_id = $request->get('Kelas');
        $new_siswa->Nama = $request->get('Nama');
        $new_siswa->No = $request->get('Nomor');
        $new_siswa->NIS = $request->get('NIS');
        $new_siswa->save();
         return redirect()->route('Siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($Siswa_id)
    {
        $data = Siswa::findOrFail($Siswa_id);
        return view('pages/Siswa/edit')->with([
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Siswa_id)
    {
        $siswa = Siswa::findOrFail($Siswa_id);
        $siswa->Kelas_id = $request->get('Kelas');
        $siswa->Nama = $request->get('Nama');
        $siswa->No = $request->get('Nomor');
        $siswa->NIS = $request->get('NIS');
        $siswa->save();

        return redirect()->route('Siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($Siswa_id)
    {
        $data = Siswa::findOrFail($Siswa_id);
        $data->delete();

        return redirect()->route('Siswa.index');
    }
}
