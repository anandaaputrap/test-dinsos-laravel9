<?php

namespace App\Http\Controllers;

use App\Models\Pendapatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;

class PendapatanController extends Controller
{
 
    public function index()
    {
        return view('pendapatan.home')->with([
            'pendapatan' => Pendapatan::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_jurnal' => 'required|min:5|max:10',
            'tgl_jurnal' => 'required|date',
            'dokumen_sumber' => 'required|min:3',
            'no_dokumen' => 'required|min:5|max:10',
            'tgl_dokumen' => 'required|date',
            'uraian' => 'required',
        ]);

        $pendapatan = new Pendapatan();
        $pendapatan->no_jurnal = $request->no_jurnal;
        $pendapatan->tgl_jurnal = $request->tgl_jurnal;
        $pendapatan->dokumen_sumber = $request->dokumen_sumber;
        $pendapatan->no_dokumen = $request->no_dokumen;
        $pendapatan->tgl_dokumen = $request->tgl_dokumen;
        $pendapatan->uraian = $request->uraian;
        $pendapatan->save();

        return redirect('pendapatan');
        // return to_route('pendapatan.index')->with('success', 'Data Berhasil Ditambahkan');
    }


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
        $request->validate([
            'no_jurnal' => 'required|min:5|max:10',
            'tgl_jurnal' => 'required|date',
            'dokumen_sumber' => 'required|min:3',
            'no_dokumen' => 'required|min:5|max:10',
            'tgl_dokumen' => 'required|date',
            'uraian' => 'required',
        ]);

        $pendapatan = Pendapatan::find($id);
        $pendapatan->no_jurnal = $request->no_jurnal;
        $pendapatan->tgl_jurnal = $request->tgl_jurnal;
        $pendapatan->dokumen_sumber = $request->dokumen_sumber;
        $pendapatan->no_dokumen = $request->no_dokumen;
        $pendapatan->tgl_dokumen = $request->tgl_dokumen;
        $pendapatan->uraian = $request->uraian;
        $pendapatan->save();

        // return redirect('pendapatan');
        return to_route('pendapatan.index')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendapatan = Pendapatan::find($id);
        $pendapatan->delete();

        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
