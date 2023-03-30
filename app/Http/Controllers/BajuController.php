<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BajuController extends Controller
{
    public function index()
    {
        $baju = Baju::all();
        return view('users.home', compact(['baju']));
    }

    public function category()
    {
        $baju = Baju::all();
        return view('users.category', compact(['baju']));
    }

    public function index_baju()
    {
        $baju = Baju::all();
        return view('admin.baju.index', compact(['baju']));
    }

    public function create()
    {
        return view('admin.baju.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token', 'submit']));
        $file = $request->gambar;
        $extension = $file->getClientOriginalExtension();
        $newName = time() . '_baju' . '.' . $extension;
        $file->move('img/baju/', $newName);

        $link = 'img/baju/' . $newName;

        baju::create([
            'gambar' => $link,
            'nama' => $request->{'nama'},
            'deskripsi' => $request->{'deskripsi'},
            'jenis_baju' => $request->{'jenis_baju'}
        ]);
        return redirect('/admin/baju');
    }

    public function edit($id)
    {
        $baju = Baju::find($id);
        // dd($baju);
        return view('admin.baju.edit', compact(['baju']));
    }

    public function update($id, Request $request)
    {
        $baju = baju::find($id);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $nama_file = time() . '_baju' . '.' . $extension;
            $file->move('img/baju/', $nama_file);

            File::delete('img/baju/' . $baju->gambar);
            $baju->gambar = 'img/baju/' . $nama_file;
        }
        $baju->save();
        // $baju ->update($request->except(['_token','submit']));
        $baju->update([
            'nama' => $request->{'nama'},
            'deskripsi' => $request->{'deskripsi'},
            'jenis_baju' => $request->{'jenis_baju'}
        ]);
        return redirect('/admin/baju');
    }
    
    public function destroy($id)
    {
        $baju = baju::find($id);
        $baju->delete();
        return redirect('/admin/baju');
    }
}
