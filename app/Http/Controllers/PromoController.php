<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = Promo::all();
        return view('admin.promo.index', compact(['promo']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:255',
        //     'deskripsi' => 'required',
        //     'gambar' => 'image|file|max:1024'
        // ]);

        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $newName = time() . '_promo' . '.' . $extension;
        $file->move('img/promo/', $newName);

        $link = 'img/promo/' . $newName;

        promo::create([
            'gambar' => $link,
            'nama' => $request->{'nama'},
            'deskripsi' => $request->{'deskripsi'}
        ]);
        return redirect('/admin/promo');
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
        $promo = Promo::find($id);
        return view('admin.promo.edit', compact(['promo']));
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
        $promo = promo::find($id);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $nama_file = time() . '_promo' . '.' . $extension;
            $file->move('img/promo/', $nama_file);

            File::delete('img/promo/' . $promo->gambar);
            $promo->gambar = 'img/promo/' . $nama_file;
        }
        $promo->save();
        // $promo ->update($request->except(['_token','submit']));
        $promo->update([
            'nama' => $request->{'nama'},
            'deskripsi' => $request->{'deskripsi'},
        ]);
        return redirect('/admin/promo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = promo::find($id);
        $promo->delete();
        return redirect('/admin/promo');
    }
}
