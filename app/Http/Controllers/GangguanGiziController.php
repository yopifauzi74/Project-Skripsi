<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GangguanGizi;

class GangguanGiziController extends Controller
{
    //
    public function index()
    {
        $data = GangguanGizi::get();
        // dd($data);
        return view ('diagnosa.index', compact('data'));
    }

    public function create()
    {
        return view('diagnosa.create');
    }

    public function store(Request $request)
    {
        $item = new GangguanGizi();
        $item->kode = $request->kode;
        $item->nama_diagnosa = $request->nama_diagnosa;
        $item->penanganan = $request->penanganan;
        $item->save();

        return redirect(route('diagnosa.index'))->with('SUCCESS','Data Berhasil Di Tambahkan');
    }

    public function view($id)
    {
        $item = GangguanGizi::find($id);
        if($item){
            $data['item'] = $item;
            return view('diagnosa.view', $data);
        }

        return abort(404);
    }

    public function edit($id)
    {
        $item = GangguanGizi::find($id);
        if($item){
            $data['item'] = $item;
            return view('diagnosa.edit', $data);
        }

        return abort(404);
    }

    public function update(Request $request, $id)
    {
        $item = GangguanGizi::find($id);
        if($item){
            $item->kode = $request->kode;
            $item->nama_diagnosa = $request->nama_diagnosa;
            $item->penanganan = $request->penanganan;
            if($item->save()){
                return redirect(route('diagnosa.index'))->with('SUCCESS','Data Berhasil Di Update');
            }     
        }
        return abort(404);
    }

    public function delete($id)
    {
        $item = GangguanGizi::find($id);
        $item->delete();
        return redirect(route('diagnosa.index'))->with('SUCCESS','Data Telah Dihapus');
    }
}


