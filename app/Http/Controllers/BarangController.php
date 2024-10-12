<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store;
use App\Http\Requests\Update;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataBarang = Barang::all();
        return view('index')->with([
            'barang'=>$dataBarang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $validate = $request->validated();
        $Barang = new Barang();
        $Barang->nama = $request->txtnama;
        $Barang->kondisi = $request->txtkondisi;
        $Barang->jenis = $request->txtjenis;
        $Barang->berat = $request->txtberat;
        $Barang->save();

        return redirect('/')->with('msg','Input Barang Berhasil');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Barang::find($id);
        return view('edit')->with([
            'txtid'=>$data->id,
            'txtnama'=>$data->nama,
            'txtkondisi'=>$data->kondisi,
            'txtjenis'=>$data->jenis,
            'txtberat'=>$data->berat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, $id)
    {
        $data = Barang::find($id);
        $data->nama = $request->txtnama;
        $data->kondisi = $request->txtkondisi;
        $data->jenis = $request->txtjenis;
        $data->berat = $request->txtberat;
        $data->save();

        return redirect('/')->with('msg','Update Barang "'.$data->nama.'" Berhasil');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Barang::find($id);
        $data ->delete();

        return redirect('/')->with('msg','"'.$data->nama.'" Berhasil Dihapus');
    
    }
}
