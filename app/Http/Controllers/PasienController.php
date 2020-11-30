<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\StatusKeluarga;
use Carbon;

class PasienController extends Controller
{
    //
    public function index()
    {
        $data = Pasien::get();
        return view ('pasien.index', compact('data'));
    }

    public function create()
    {
        $datas = StatusKeluarga::select('id','status')->get();
        return view ('pasien.create', compact('datas'));
    }

    public function store(Request $request)
    {
        
        $pasien = new Pasien();
        $pasien->kd_pasien = $request->kd_pasien;
        // $pasien->id_status_keluarga = $request->id_status_keluarga;
        // $pasien->usia_kehamilan = $request->usia_kehamilan;
        // $pasien->usia_kelahiran = $request->usia_kelahiran;
        $pasien->first_name = $request->first_name;
        $pasien->tgl_checkup = Carbon\Carbon::now()->format('Y-m-d');
        $pasien->last_name = $request->last_name;
        $pasien->address = $request->address;
        $pasien->no_telp = $request->no_telp;
        $pasien->age = $request->age;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        // if($pasien->age > 1 && $pasien->age < 6 )
        // {
        //     $pasien->kategori = "Balita";
        // }
        // elseif($pasien->age > 5 && $pasien->age < 16 )
        // {
        //     $pasien->kategori = "Anak";
        // }
        // elseif($pasien->age > 16)
        // {
        //     $pasien->kategori = "Dewasa";
        // }
        $pasien->save();

        return redirect(route('pasien.index'))->with('success', 'success add data');
    }

    public function edit($id)
    {
        $item = Pasien::find($id);
        if($item){
            $data['item'] = $item;
            return view('pasien.edit', $data);
        }
        return abort(404);
    }

    public function update(Request $request, $id)
    {
        $item = Pasien::find($id);
        if($item){
            $item->kd_pasien = $request->kd_pasien;
            $item->tgl_checkup = $request->tgl_checkup;
            $item->first_name = $request->first_name;
            $item->last_name = $request->last_name;
            $item->address = $request->address;
            $item->no_telp = $request->no_telp;
            $item->age = $request->age;
            $item->jenis_kelamin = $request->jenis_kelamin;
            if($item->save()){
                return redirect(route('pasien.index'))->with('success', 'success update data');
            }
        }
        return abort(404);
    }
}