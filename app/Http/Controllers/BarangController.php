<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::paginate(6);
        $posts = Barang::orderBy('Kode_Barang', 'desc')->paginate(6);
        return view('barangs.index', compact('barangs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
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
            'Kode_Barang' => 'required',
            'Nama_Barang' => 'required',
            'Kategori_Barang' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
        ]);

        Barang::create($request->all());

        return redirect()->route('barangs.index')->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Kode_Barang
     * @return \Illuminate\Http\Response
     */
    public function show($Kode_Barang)
    {
        $Barang = Barang::find($Kode_Barang);
        return view('barangs.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Kode_Barang
     * @return \Illuminate\Http\Response
     */
    public function edit($Kode_Barang)
    {
        $Barang = Barang::find($Kode_Barang);
        return view('barangs.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Kode_Barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kode_Barang)
    {
        $request->validate([
            'Kode_Barang' => 'required',
            'Nama_Barang' => 'required',
            'Kategori_Barang' => 'required',
            'Harga' => 'required',
            'Qty' => 'required',
        ]);

        Barang::find($Kode_Barang)->update($request->all());

        return redirect()->route('barangs.index')->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Kode_Barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kode_Barang)
    {
        Barang::find($Kode_Barang)->delete();
        return redirect()->route('barangs.index')->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $barangs = Barang::where('Nama_Barang', 'like', "%" . $keyword . "%")->paginate(6);
        return view('barangs.index', compact('barangs'))->with('i', (request()->input('page', 1) -1) * 5);
    }
}
