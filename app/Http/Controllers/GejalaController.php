<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gejala;

class GejalaController extends Controller
{
    //
    public function index()
    {
        $data = Gejala::get();
        return view('gejala.index', compact('data'));
    }

    public function create()
    {
        return view('gejala.create');
    }

    public function store(Request $request)
    {
        $item = new Gejala();
        $item->kode = $request->kode;
        $item->gejala = $request->gejala;
        $item->save();

        return redirect(route('gejala.index'))->with('SUCCESS','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $item = Gejala::find($id);
        if($item){
            $data['item'] = $item;
            return view('gejala.edit', $data);
        }

        return abort(404);
    }

    public function update(Request $request, $id)
    {
        $item = Gejala::find($id);
        if($item){
            $item->kode = $request->kode;
            $item->gejala = $request->gejala;
            if($item->save()){
                return redirect(route('gejala.index'))->with('SUCCESS','Data Berhasil Dirubah');
            }
        }
        return abort(404);
    }

    public function view($id)
    {
        $item = Gejala::find($id);
        if($item){
            $data['item'] = $item;
            return redirect(route('gejala.view', $data));
        }

        return abort(404);

    }

    public function delete($id)
    {
        $item = Gejala::find($id);
        $item->delete();
        return redirect(route('gejala.index'))->with('SUCCESS','Data Telah Dihapus');
    }
}
