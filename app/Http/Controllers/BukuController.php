<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\BukuModel;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;
use PhpParser\Node\Stmt\Function_;
class BukuController extends Controller
{
    public function bukutampil()

    {
        $databuku = BukuModel::orderby('kode_buku')
        ->paginate(5);
        return view('halaman/view_buku', ['buku' => $databuku]);

    }

    public function bukutambah(Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required'
    ]);

    BukuModel::create([

        'kode_buku' => $request->kode_buku,
        'judul' => $request->judul,
        'pengarang' => $request->pengarang,
        'kategori' => $request->kategori
    ]);

    return redirect('/buku');
}


    Public Function bukuhapus ($id_buku)
    {

        $databuku=BukuModel::find($id_buku);
        $databuku->delete();

        return redirect() -> back();
    }

    Public Function bukuedit($id_buku, Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required'

        ]);


        $id_buku = BukuModel::find($id_buku);
        $id_buku ->kode_buku = $request->kode_buku;
        $id_buku ->judul = $request->judul;
        $id_buku ->pengarang = $request->pengarang;
        $id_buku ->kategori = $request->kategori;

        $id_buku->save();

        return redirect()->back();

    }

}
