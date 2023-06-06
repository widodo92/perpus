<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bukus'] = Buku::all();
        return view('buku.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.ftambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:bukus|max:255',
            'penulis' => 'required',
        ]);

        $buku = new Buku();
        $buku->title = $request->title;
        $buku->author = $request->penulis;
        $buku->cat_id = $request->cat_id;
        $buku->save();

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $data['buku'] = $buku;
        return view('buku.fedit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'penulis' => 'required',
        ]);

        //  $buku = new Buku();
        $buku->title = $request->title;
        $buku->author = $request->penulis;
        $buku->cat_id = $request->cat_id;
        // dd($buku);
        $buku->save();

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
