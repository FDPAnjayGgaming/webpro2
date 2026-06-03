<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $produk = Produk::with('kategori')->get();

        return view('produk.index', compact('produk'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = \App\Models\Kategori::all();

         return view('produk.create', compact('kategori'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    Produk::create([
        'nama' => $request->nama,
        'id_kategori' => $request->kategori,
        'qty' => $request->qty,
        'harga_beli' => $request->beli,
        'harga_jual' => $request->jual,
    ]);
    return redirect()->route('produk.index');
    }  
    
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = produk::where('id',$id)->first();
        return view('produk.show',compact('produk'));
        }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::where('id', $id)->first();
        $kategori = \App\Models\Kategori::all();

        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Produk::where('id', $id)->update([
            'nama' => $request->nama,
            'id_kategori' => $request->kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->beli,
            'harga_jual' => $request->jual,
        ]);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::where('id', $id)->delete();

    return redirect()->route('produk.index');
    }
}
